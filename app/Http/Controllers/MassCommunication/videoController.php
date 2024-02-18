<?php

namespace App\Http\Controllers\MassCommunication;

use App\Models\MassCommunication\video;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassCommunication\StorevideoRequest;
use App\Http\Requests\MassCommunication\UpdateAudioRequest;
use App\Http\Requests\MassCommunication\UpdatevideoRequest;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class videoController extends Controller
{

    public function index()
    {
        $videos = video::all();
        return view('admin.Video.index', compact('videos'));

        
    }

    public function create()
    {
        return view('admin.Video.create');
    }

    public function store(StorevideoRequest $request)
    {
        Video::create($request->validated());
        toast('भिडियो सफलतापूर्वक थपियो', 'Successs');
        return redirect(route('admin.mass-communication.video.index'));
    }

    public function edit(video $video)
    {
        return view('admin.Video.edit', compact('video'));
    }

    public function update(UpdatevideoRequest $request, video $video)
    {
        $video->update($request->validated());
        toast('भिडियो सफलतापूर्वक अद्यावधिक गरियो', 'Success');
        return redirect()->route('admin.mass-communication.video.index');
    }

    public function destroy(video $video)
    {
        $video->delete();
        toast('भिडियो सफलतापूर्वक मेटियो', 'success');
        return redirect()->route('admin.mass-communication.video.index');
    }
}
