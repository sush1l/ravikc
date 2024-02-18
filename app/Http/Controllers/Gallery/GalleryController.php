<?php

namespace App\Http\Controllers\Gallery;

use App\Models\Gallery\Gallery;
use App\Http\Controllers\Controller;
use App\Http\Requests\Gallery\StoreGalleryRequest;
use App\Http\Requests\Gallery\UpdateGalleryRequest;
use App\Models\File\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{

    public function index()
    {
        $gallery = Gallery::with('files')->get();
        return view('admin.gallery.index', compact('gallery'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(StoreGalleryRequest $request)
    {

        DB::transaction(function () use ($request) {
            $gallery = Gallery::create($request->validated());

            if ($request->hasFile('photo')) {
                foreach ($request->file('photo') as $file) {
                    $gallery->files()->create([
                        'file' => $file->store('gallery/' . Str::slug($request->input('title_en'), '_'), 'public'),
                        'file_name' => pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME),
                        'file_extension' => $file->getClientOriginalExtension()
                    ]);
                }
            }
        });

        toast('फोटो सफलतापूर्वक थपियो', 'success');
        return redirect()->route('admin.gallery.index');
    }

    public function show(Gallery $gallery)
    {
        $gallery->load('files');
        return view('admin.gallery.show', compact('gallery'));
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', compact('gallery'));
    }

    public function update(UpdateGalleryRequest $request, Gallery $gallery)
    {
        $gallery->update($request->validated());
        toast('फोटो सफलतापूर्वक अद्यावधिक गरियो', 'success');
        return redirect()->route('admin.gallery.index');
    }

    public function destroy(Gallery $gallery)
    {
        foreach($gallery->files as $file){
            $this->deleteFile($file->file);
        }
        $gallery->files()->delete();
        $gallery->delete();
        toast('फोटो सफलतापूर्वक मेटियो', 'success');
        return redirect()->route('admin.gallery.index');
    }


    public function deleteImage(File $file)
    {
        if ($file->file) {
            $this->deleteFile($file->file);
        }
        $file->delete();
        toast('फोटो सफलतापूर्वक अद्यावधिक गरियो', 'success');
        return back();
    }
}
