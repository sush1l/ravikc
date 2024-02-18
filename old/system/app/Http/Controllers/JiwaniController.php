<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\JiwaniModel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class JiwaniController extends Controller
{
    public function index(){
        $jiwani = JiwaniModel::find(1);
        return view('admin.jiwani.jiwani', compact(['jiwani']));
    }

    public function storeJiwani(Request $request){
        $data = $request->validate([
            'photo' => 'nullable | mimes:jpg,png,jpeg,jfif',
            'introduction' => 'required',
        ]);

       //photo store
       if($request->hasFile('photo')){
       $OriginalFileName = $request->file('photo')->getClientOriginalName();
       //File name
       $fileFirstName = pathinfo($OriginalFileName,PATHINFO_FILENAME);
       //extension
       $ext = $request->FILE('photo')->getClientOriginalExtension();
       //File to store
       $FileNameToStore = $fileFirstName.'_'.time().'.'.$ext;
       //moving
       $path = $request->file('photo')->storeAs('public/assets/',$FileNameToStore);

       $jiwani = JiwaniModel::find(1);
       $ext_file = $jiwani->photo;
       if(file_exists(public_path('storage/assets/'.$ext_file))){
        $file = 'storage/assets/'.$ext_file;
        unlink($file);
            }
        }
       //store in DB
       $store =  JiwaniModel::find(1);

       if($request->hasFile('photo')){
       $store->photo = $FileNameToStore;
       }
       $store->jiwani = $request->introduction;
       $store->save();

       Alert::success('Success', 'Data Inserted Successfully');
       return redirect()->back();
    }

}
