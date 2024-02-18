<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\VideoGalleryModel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class VideoGalleryController extends Controller
{
   public function index(){
       $video = VideoGalleryModel::all();
       return view('admin.gallery.video.video', compact(['video']));
   }
   public function add(Request $request){
       $request->validate([
           'title'  =>  'required',
           'file'   =>  'required',
       ]);
        $video = new VideoGalleryModel;
        $video->title = $request->title;
        $video->video =  $request->file;
        $video->save();
        Alert::success('Success','Video Added');
        return redirect()->back();
   }
   public function delete($id){
       VideoGalleryModel::find($id)->delete();
       Alert::success('file Deleted');
       return redirect()->back();
   }
   public function edit($id){
       $edit = VideoGalleryModel::find($id);
       return view('admin.gallery.video.videoedit', compact(['edit']));
   }
   public function update(Request $request){
       $request->validate([
           'title'  =>  'required',
           'file'   =>  'required',
           'id' =>  'required'
       ]);
       $video =  VideoGalleryModel::find($request->id);
       $video->title = $request->title;
       $video->video =  $request->file;
       $video->save();
       Alert::success('Success','Video Added');
       return redirect()->back();
   }
}
