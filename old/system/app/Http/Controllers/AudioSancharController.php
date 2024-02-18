<?php

namespace App\Http\Controllers;

use App\AudioSancharModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AudioSancharController extends Controller
{
public function index(){
    $audio = AudioSancharModel::all();
    return view('admin.interview.audio.audiosanchar',compact('audio'));
}
public function addaudio(Request $request){
    $request->validate([
        'title' =>  'required',
        'file' =>  'required | mimes:application/octet-stream,audio/mpeg,mpga,mp3,wav',
        'introduction'  =>  'nullable',
        'u_date'    =>  'required',
        'u_date_ad'    =>  'required',
    ]);
    $OriginalFileName = $request->file('file')->getClientOriginalName();
    //File name
    $fileFirstName = pathinfo($OriginalFileName,PATHINFO_FILENAME);
    //extension
    $ext = $request->FILE('file')->getClientOriginalExtension();
    //File to store
    $FileNameToStore = $fileFirstName.'_'.time().'.'.$ext;
    //moving
    $path = $request->file('file')->storeAs('public/assets/',$FileNameToStore);

    $audio = new AudioSancharModel;
    $audio->title = $request->title;
    $audio->file    =   $FileNameToStore;
    $audio->description =   $request->introduction;
    $audio->u_date  =   $request->u_date;
    $audio->u_date_ad   =   $request->u_date_ad;
    $audio->u_time  =   date('h:i:s');
    $audio->save();
Alert::success('Success', 'File Added');
return redirect()->back();
}
public function delete($id){
    $delete = AudioSancharModel::find($id);
    $ext_file = $delete->file;
    if(file_exists(public_path('storage/assets/'.$ext_file))){
        $file = 'storage/assets/'.$ext_file;
        unlink($file);
    }
    $delete->delete();
    return redirect()->back();
}
public function edit($id){
    $edit = AudioSancharModel::find($id);
    return view('admin.interview.audio.audiosancharedit',compact('edit'));
}
public function updateaudio(Request $request){
        $request->validate([
            'title' =>  'required',
            'file' =>  'nullable | mimes:application/octet-stream,audio/mpeg,mpga,mp3,wav',
            'introduction'  =>  'nullable',
            'u_date'    =>  'required',
            'u_date_ad'    =>  'required',
            'id'    =>  'required',
        ]);
        $audio =  AudioSancharModel::find($request->id);
        if ($request->hasFile('file')) {
            $ext_file = $audio->file;
            if(file_exists(public_path('storage/assets/'.$ext_file))){
                $file = 'storage/assets/'.$ext_file;
                unlink($file);
            }
            $OriginalFileName = $request->file('file')->getClientOriginalName();
            //File name
            $fileFirstName = pathinfo($OriginalFileName, PATHINFO_FILENAME);
            //extension
            $ext = $request->FILE('file')->getClientOriginalExtension();
            //File to store
            $FileNameToUpdate = $fileFirstName . '_' . time() . '.' . $ext;
            //moving
            $path = $request->file('file')->storeAs('public/assets/', $FileNameToUpdate);
            $audio->file    =   $FileNameToUpdate;
        }


        $audio->title = $request->title;
        $audio->description =   $request->introduction;
        $audio->u_date  =   $request->u_date;
        $audio->u_date_ad   =   $request->u_date_ad;
        $audio->u_time  =   date('h:i:s');
        $audio->save();
        Alert::success('Success', 'File Added');
        return redirect()->back();
    }
}
