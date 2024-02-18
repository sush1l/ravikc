<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\NewspaperModel;
use App\VideoModel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class VideoController extends Controller
{
    public function index(){
        $audio = VideoModel::all();
        return view('admin.interview.video.video',compact('audio'));
    }
    public function addnewspaper(Request $request){
        $request->validate([
            'title' =>  'required',
            'file' =>  'required',
            'introduction'  =>  'required',
            'u_date'    =>  'required',
            'u_date_ad'    =>  'required',
        ]);


        $audio = new VideoModel;
        $audio->title = $request->title;
        $audio->file    =   $request->file;
        $audio->description =   $request->introduction;
        $audio->u_date  =   $request->u_date;
        $audio->u_date_ad   =   $request->u_date_ad;
        $audio->u_time  =   date('h:i:s');
        $audio->save();
        Alert::success('Success', 'File Added');
        return redirect()->back();
    }
    public function delete($id){
        $delete = VideoModel::find($id);

        $delete->delete();
        return redirect()->back();
    }
    public function edit($id){
        $edit = VideoModel::find($id);
        return view('admin.interview.video.videoedit',compact('edit'));
    }
    public function update(Request $request){
        $request->validate([
            'title' =>  'required',
            'file' =>  'required',
            'introduction'  =>  'required',
            'u_date'    =>  'required',
            'u_date_ad'    =>  'required',
            'id'    =>  'required',
        ]);

        $audio =  VideoModel::find($request->id);
       $audio->file = $request->file;
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
