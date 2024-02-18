<?php

namespace App\Http\Controllers;

use App\GatibidhiModel;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class GatibidhiController extends Controller
{
    public function index(){
        return view('admin.gatibidhi.gatibidhi');
    }
    public function store(Request $request){
        $data = $request->validate([
            'title' => 'required',
            'photo' =>  'required | mimes:jpg,jpeg,jfif,png',
            'description'   =>  'nullable',
            'u_date'    =>  'required',
            'u_date_ad'    =>  'required',
        ]);
        $OriginalFileName = $request->file('photo')->getClientOriginalName();
        //File name
        $fileFirstName = pathinfo($OriginalFileName,PATHINFO_FILENAME);
        //extension
        $ext = $request->FILE('photo')->getClientOriginalExtension();
        //File to store
        $FileNameToStore = $fileFirstName.'_'.time().'.'.$ext;
        //moving
        $path = $request->file('photo')->storeAs('public/assets/',$FileNameToStore);

        $store_gatibidhi = new GatibidhiModel;
        $store_gatibidhi->title = $request->title;
        $store_gatibidhi->description = $request->description;
        $store_gatibidhi->photo = $FileNameToStore;
        $store_gatibidhi->u_date = $request->u_date;
        $store_gatibidhi->u_date_ad = $request->u_date_ad;
        $store_gatibidhi->u_time = date('h:i:s');
        $store_gatibidhi->save();
        Alert::success('Success','गतिबिधि थपियो ');
        return redirect()->back();
    }
    public function list(){
        $gatibidhiList = GatibidhiModel::all();
        return view('admin.gatibidhi.gatibishilist', compact('gatibidhiList'));
    }
    public function delete($id){
       $deletegatibidhi = GatibidhiModel::find($id);
        $ext_file = $deletegatibidhi->photo;
        if(file_exists(public_path('storage/assets/'.$ext_file))){
            $file = 'storage/assets/'.$ext_file;
            unlink($file);
        }
        $deletegatibidhi->delete();
        return redirect()->back();

    }
    public function editdata($id){
        $editgatibidhi = GatibidhiModel::find($id);
        return view('admin.gatibidhi.gatibidhiedit', compact(['editgatibidhi']));
    }
    public function GatibidhiUpdate(Request $request){
        $data = $request->validate([
            'title' => 'required',
            'photo' =>  'nullable | mimes:jpg,jpeg,jfif,png',
            'description'   =>  'nullable',
            'u_date'    =>  'required',
            'u_date_ad'    =>  'required',
            'id'    =>  'required',
        ]);
        $store_gatibidhi = GatibidhiModel::find($request->id);


        if ($request->hasFile('photo')) {
            $ext_file = $store_gatibidhi->photo;
            if(file_exists(public_path('storage/assets/'.$ext_file))){
                $file = 'storage/assets/'.$ext_file;
                unlink($file);
            }
            $OriginalFileName = $request->file('photo')->getClientOriginalName();
            //File name
            $fileFirstName = pathinfo($OriginalFileName, PATHINFO_FILENAME);
            //extension
            $ext = $request->FILE('photo')->getClientOriginalExtension();
            //File to store
            $FileNameToStore = $fileFirstName . '_' . time() . '.' . $ext;
            //moving
            $path = $request->file('photo')->storeAs('public/assets/', $FileNameToStore);
        }


        $store_gatibidhi->title = $request->title;
        $store_gatibidhi->description = $request->description;
        if ($request->hasFile('photo')) {
            $store_gatibidhi->photo = $FileNameToStore;
        }
        $store_gatibidhi->u_date = $request->u_date;
        $store_gatibidhi->u_date_ad = $request->u_date_ad;
        $store_gatibidhi->u_time = date('h:i:s');
        $store_gatibidhi->save();
        Alert::success('Success','गतिबिधि Edit भयो ');
        return redirect()->back();
    }
}
