<?php

namespace App\Http\Controllers\Bio;

use App\Models\Bio;
use App\Http\Controllers\Controller;
use App\Http\Requests\Bio\StoreBioRequest;
use App\Http\Requests\Bio\UpdateBioRequest;
use App\Models\Bio\Bio as BioBio;
use Illuminate\Http\Request;

class BioController extends Controller
{

    public function index()
    {
        $bios = BioBio::all();
        return view('admin.Bio.index', compact('bios'));
    }

    public function create()
    {
        return view('admin.Bio.create');
    }

    public function store(StoreBioRequest $request)
    {
        BioBio::create($request->validated());
        toast('जिवनी सफलतापूर्वक थपियो', 'success');
        return redirect()->route('admin.bio.index');
    }

    public function show(BioBio $bio)
    {
        //
    }

    public function edit(BioBio $bio)
    {
    return view('admin.Bio.edit', compact('bio'));
    }

    public function update(UpdateBioRequest $request, BioBio $bio)
    {
        $bio->update($request->validated());
        toast('जिवनी सफलतापूर्वक अद्यावधिक गरियो', 'success'); 
        return redirect()->route('admin.bio.index');
    }

    public function destroy(BioBio $bio)
    {
        $bio->delete();
        toast('जिवनी सफलतापूर्वक मेटियो', 'success');
        return redirect()->route('admin.bio.index');
    }
}
