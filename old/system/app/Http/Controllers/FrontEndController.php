<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\GatibidhiModel;
use App\MantriModel;
use App\NewspaperModel;
use App\PhotoModel;
use App\JiwaniModel;
use App\VideoModel;
use App\AudioSancharModel;

class FrontEndController extends Controller
{
    public function index(){
    $gatibidi = GatibidhiModel::orderBy('id','Desc')->Limit(2)->get();
    $mantri = MantriModel::orderBy('id','Desc')->Limit(2)->get();
    $newspaper = NewspaperModel::orderBy('id','Desc')->Limit(4)->get();
    $photo = PhotoModel::orderBy('id','Desc')->get();
    $tv = VideoModel::orderBy('id','Desc')->Paginate(6);
    return view('home.home.index', compact(['gatibidi','mantri','newspaper','photo','tv']));
    }
    public function bio(){
    $bio = JiwaniModel::get();
    return view('home.home.bio', compact(['bio']));
    }
    public function activity(){
        $activity = GatibidhiModel::orderBy('id','Desc')->Paginate(6);
        return view ('home.home.activity', compact(['activity']));
    }
    public function media(){
        $media = NewspaperModel::orderBy('id','Desc')->Paginate(6);
        return view ('home.home.media', compact(['media']));
    }
    public function tv(){
        $tv = VideoModel::orderBy('id','Desc')->Paginate(6);
        return view ('home.home.tv', compact(['tv']));
    }
    public function newspaper(){
        $newspaper = NewspaperModel::orderBy('id','Desc')->Paginate(6);
        return view ('home.home.newspaper', compact(['newspaper']));
    }
    public function audio(){
        $audio = AudioSancharModel::orderBy('id','Desc')->Paginate(6);
        return view ('home.home.audio', compact(['audio']));
    }
    public function mantri(){
    $mantri = MantriModel::orderBy('id','Desc')->Paginate(6);
    return view ('home.home.minister', compact(['mantri']));
    }
    public function photo(){
    $photo = PhotoModel::orderBy('id','Desc')->Paginate(6);
    return view ('home.home.photo', compact(['photo']));
    }
    public function activitySingle($id){
    $single= GatibidhiModel::find($id);
    $activity = GatibidhiModel::orderBy('id','Desc')->limit(3)->get();
    return view('home.home.single-activity', compact(['single','activity']));
    }
    public function singleMinister($id){
    $single= MantriModel::find($id);
    $mantri = MantriModel::orderBy('id','Desc')->limit(3)->get();
    return view('home.home.single-minister', compact(['single','mantri']));
    }
    public function singleMedia($id){
    $single= NewspaperModel::find($id);
    $media = NewspaperModel::orderBy('id','Desc')->limit(3)->get();
    return view('home.home.single-media', compact(['single','media']));
    }
    public function singlePhoto($id){
    $single= PhotoModel::find($id);
    $photo = PhotoModel::orderBy('id','Desc')->get();
    return view('home.home.photo-single', compact(['single','photo']));
    }
     public function singlePaper($id){
    $single= NewspaperModel::find($id);
    $paper = NewspaperModel::orderBy('id','Desc')->get();
    return view('home.home.single-newspaper', compact(['single','paper']));
    }
    public function singleTv($id){
    $single= VideoModel::find($id);
    $tv = VideoModel::orderBy('id','Desc')->get();
    return view('home.home.single-tv', compact(['single','tv']));
    }
}
