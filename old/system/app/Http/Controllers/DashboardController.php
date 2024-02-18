<?php

namespace App\Http\Controllers;

use App\AudioSancharModel;
use App\Http\Controllers\Controller;
use App\MantriModel;
use App\NewspaperModel;
use App\PhotoModel;
use App\VideoModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function index(){
       $audiosanchar = AudioSancharModel::all()->count();
       $videosanchar = VideoModel::all()->count();
       $newspapersanchar = NewspaperModel::all()->count();
       $photogallery = PhotoModel::all()->count();
       $videogallery = VideoModel::all()->count();
       $mantrimahuda = MantriModel::all()->count();
       return view('admin.dashboard.dashboard',compact([
           'audiosanchar','videosanchar','newspapersanchar','photogallery','videogallery','mantrimahuda'
       ]));
   }
}
