<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Activities\Activity;
use App\Models\Bio\Bio;
use App\Models\Contact\Contact;
use App\Models\Gallery\Gallery;
use App\Models\MassCommunication\Audio;
use App\Models\MassCommunication\Newspaper;
use App\Models\MassCommunication\video;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $activities = Activity::latest('upload_date_bs')->limit(2)->get();
        $galleries = Gallery::with('files')->latest()->limit(4)->get();
        $newspapers = Newspaper::latest()->limit(2)->get();
        $videos = video::latest()->limit(2)->get();

        return view('frontend.home', compact('activities', 'galleries', 'newspapers','videos'));
    }

    public function category()
    {
        $activities = Activity::latest('upload_date_bs')->get();
        return view('frontend.pages.activity.category', compact('activities'));
    }

    public function singleactivity(Activity $activity)
    {
        $activities = Activity::orderBy('upload_date_bs', 'desc')->where('id', '!=', $activity->id)->limit(4)->get();
        return view('frontend.pages.activity.single-activity', compact('activities', 'activity'));
    }
    public function newspaper()
    {
        $newspapers = Newspaper::latest('upload_date_bs')->get();
        return view('frontend.pages.newspaper.newspaper', compact('newspapers'));
    }
    public function singlenewspaper(Newspaper $newspaper)
    {
        $newspapers = Newspaper::orderBy('upload_date_bs','desc')->where('id', '!=', $newspaper->id)->limit(5)->get();
        return view('frontend.pages.newspaper.single-newspaper', compact('newspapers','newspaper'));
    }
    public function video()
    {
        $videos = video::latest()->get();
        return view('frontend.pages.video.video', compact('videos'));
    }
    public function singlevideo(Video $video)
    {
        $videos = video::orderBy('upload_date_bs','desc')->where('id', '!=', $video->id)->limit(5)->get();
        return view('frontend.pages.video.single-video', compact('videos','video'));
    }

    public function bio()
    {
        $bios = Bio::latest()->get();
        return view('frontend.pages.bio.bio',compact('bios'));
    }
    public function audio()
    {
        $audios = Audio::latest()->get();
        return view('frontend.pages.audio.audio', compact('audios'));
    }
    public function contact()
    {
        return view('frontend.pages.contact.contact');
    }
    public function contactstore(Request $request)
    {
       $data= $request->validate([
            'first_name'=>['required'],
            'last_name'=>['required'],
            'contact_no'=>['required'],
            'email'=>['required','email'],
            'message'=>['required']
        ]);

        Contact::create($data);
        toast('सन्देश सफलतापूर्वक पेश भयो','success');
        return redirect()->route('contact');
    }
    public function gallery()
    {
        $galleries = Gallery::with('files')->latest()->limit(4)->get();
        return view('frontend.pages.gallery.gallery',compact('galleries'));
    }
}
