<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\NewspaperModel;
use App\PhotoModel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PhotoController extends Controller
{
    public function index(){
        $audio = PhotoModel::all();
        return view('admin.gallery.photo.photo',compact('audio'));
    }
    public function addphoto(Request $request){
        $request->validate([
            'title' =>  'nullable',
            'file' =>  'required | mimes:jpg,jpeg,png',
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

        $audio = new PhotoModel;
        $audio->title = $request->title;
        $audio->photo    =   $FileNameToStore;

        $audio->save();
        Alert::success('Success', 'File Added');
        return redirect()->back();
    }
    public function delete($id){
        $delete = PhotoModel::find($id);
        $ext_file = $delete->photo;
        if(file_exists(public_path('storage/assets/'.$ext_file))){
            $file = 'storage/assets/'.$ext_file;
            unlink($file);
        }
        $delete->delete();
        return redirect()->back();
    }
    public function edit($id){
        $edit = PhotoModel::find($id);
        return view('admin.gallery.photo.photoedit',compact('edit'));
    }
    public function update(Request $request){
        $request->validate([
            'title' =>  'required',
            'file' =>  'nullable | mimes:jpg,png,jpeg',

            'id'    =>  'required',
        ]);

        $audio =  PhotoModel::find($request->id);
        if ($request->hasFile('file')) {
            $ext_file = $audio->photo;
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
            $audio->photo    =   $FileNameToUpdate;
        }


        $audio->title = $request->title;
        $audio->save();
        Alert::success('Success', 'File Updated');
        return redirect()->back();
    }
}
