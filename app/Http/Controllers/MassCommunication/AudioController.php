<?php

namespace App\Http\Controllers\MassCommunication;

use App\Models\MassCommunication\Audio;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassCommunication\StoreAudioRequest;
use App\Http\Requests\MassCommunication\UpdateAudioRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AudioController extends Controller
{

    public function index()
    {
        $audios = Audio::all();
        return view('admin.Audio.index', compact('audios'));
    }

    public function create()
    {
       return view('admin.Audio.create');
    }

    public function store(StoreAudioRequest $request)
    {
        Audio::create($request->validated());
        toast('Audio Added Successfully', 'success');
        return redirect()->route('admin.mass-communication.audio.index');

    }

    // public function show(Audio $audio)
    // {
        
    // }

    public function edit(Audio $audio)
    {
        return view('admin.Audio.edit', compact('audio'));
    }

    public function update(UpdateAudioRequest $request, Audio $audio)
    {
     $audio->update($request->validated());
     toast('Audio Updated Successfully', 'success');
     return redirect()->route('admin.mass-communication.video.index'); 
    }

    public function destroy(Audio $audio)
    {
        $audio->delete();
        toast('Audio Deleted Successfully','success');
        return redirect()->route('admin.mass-communication.audio.index');
    }
}
