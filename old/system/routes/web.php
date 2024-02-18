<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'FrontEndController@index');

Route::get('media', 'FrontEndController@media')->name('media');

Route::get('bio', 'FrontEndController@bio')->name('bio');

Route::get('activity', 'FrontEndController@activity')->name('activity');

Route::get('mantri', 'FrontEndController@mantri')->name('mantri');
Route::get('photo', 'FrontEndController@photo')->name('photo');
Route::get('tv', 'FrontEndController@tv')->name('tv');

Route::get('paper', 'FrontEndController@newspaper')->name('paper');

Route::get('single-activity/{id}', 'FrontEndController@activitySingle')->name('single-activity');
Route::get('single-media/{id}', 'FrontEndController@singleMedia')->name('single-media');
Route::get('single-minister/{id}', 'FrontEndController@singleMinister')->name('single-minister');
Route::get('photo-single/{id}', 'FrontEndController@singlePhoto')->name('photo-single');
Route::get('single-newspaper/{id}', 'FrontEndController@singlePaper')->name('single-newspaper');
Route::get('single-tv/{id}', 'FrontEndController@singleTv')->name('single-tv');
Route::get('book', function () {
    return view('home.home.book');
})->name('book');
Route::get('audio', 'FrontEndController@audio')->name('audio');
Route::get('contact', function () {
    return view('home.home.contact');
})->name('contact');
Route::get('/admin',function (){
    return redirect(route('login'));
});
Route::group(['prefix' => 'admin'], function () {
    Auth::routes(['register' => false]);
    Route::get('date', function (){
      return  view('date.date');
    });
    Route::get('/home', 'DashboardController@index')->name('home');

    Route::get('/setting', function () {
        return view('admin.setting.setting');
    })->name('setting');

    //Jiwani
    Route::get('/jiwani', 'JiwaniController@index')->name('jiwani');
    Route::post('updateJiwani', 'JiwaniController@storeJiwani')->name('UpdateJiwani');

    //Gatibidhi
    Route::get('gatibidhiForm','GatibidhiController@index')->name('admin.gatibidhi');
    Route::get('gatibidhiList','GatibidhiController@list')->name('admin.gatibidhilist');
    Route::get('gatibidhiDelete/{id}','GatibidhiController@delete')->name('admin.gatibidhidelete');
    Route::get('gatibidhieditdata/{id}','GatibidhiController@editdata')->name('admin.gatibidhieditdata');
    Route::post('add_gatibidhi','GatibidhiController@store')->name('admin.addGatibidhi');
    Route::post('GatibidhiUpdate','GatibidhiController@GatibidhiUpdate')->name('admin.GatibidhiUpdate');

    //Mantrima huda
    Route::get('mantriForm','MantriController@index')->name('admin.mantri');
    Route::get('mantriList','MantriController@list')->name('admin.mantrilist');
    Route::get('mantriDelete/{id}','MantriController@delete')->name('admin.mantridelete');
    Route::get('mantrieditdata/{id}','MantriController@editdata')->name('admin.mantrieditdata');
    Route::post('add_mantri','MantriController@store')->name('admin.addmantri');
    Route::post('mantriUpdate','MantriController@MantriUpdate')->name('admin.mantriUpdate');
    //interview

    //audio
    Route::get('/Audio','AudioSancharController@index')->name('admin.audio');
    Route::get('/AudioDelete/{id}','AudioSancharController@delete')->name('admin.audiodelete');
    Route::get('/AudioEdit/{id}','AudioSancharController@edit')->name('admin.audioedit');
    Route::post('/AudioAdd','AudioSancharController@addaudio')->name('admin.add_audio');
    Route::post('/AudioUpdate','AudioSancharController@updateaudio')->name('admin.update_audio');
    //newspaper
    Route::get('/Newspaper','NewspaperController@index')->name('admin.newspaper');
    Route::get('/NewspaperDelete/{id}','NewspaperController@delete')->name('admin.newspaperdelete');
    Route::get('/NewspaperEdit/{id}','NewspaperController@edit')->name('admin.newspaperedit');
    Route::post('/NewspaperAdd','NewspaperController@addnewspaper')->name('admin.add_newspaper');
    Route::post('/NewspaperUpdate','NewspaperController@update')->name('admin.update_newspaper');
    //Video
    Route::get('/Video','VideoController@index')->name('admin.video');
    Route::get('/VideoDelete/{id}','VideoController@delete')->name('admin.videodelete');
    Route::get('/VideoEdit/{id}','VideoController@edit')->name('admin.videoedit');
    Route::post('/VideoAdd','VideoController@addnewspaper')->name('admin.add_video');
    Route::post('/VideoUpdate','VideoController@update')->name('admin.update_video');

    //PhotoGallery
    Route::get('/Photo','PhotoController@index')->name('admin.photo');
    Route::get('/PhotoDelete/{id}','PhotoController@delete')->name('admin.photodelete');
    Route::get('/PhotoEdit/{id}','PhotoController@edit')->name('admin.photoedit');
    Route::post('/PhotoAdd','PhotoController@addphoto')->name('admin.add_photo');
    Route::post('/PhotoUpdate','PhotoController@update')->name('admin.update_photo');

    //VideoGallery
    Route::get('/VideoGallery','VideoGalleryController@index')->name('admin.videoGallery');
    Route::get('/VideoGalleryDelete/{id}','VideoGalleryController@delete')->name('admin.videoGallerydelete');
    Route::get('/VideoGalleryEdit/{id}','VideoGalleryController@edit')->name('admin.videoGalleryedit');
    Route::post('/VideoGalleryAdd','VideoGalleryController@add')->name('admin.add_videoGallery');
    Route::post('/VideoGalleryUpdate','VideoGalleryController@update')->name('admin.update_videoGallery');
});
Route::get('test', function (){
    return view('index');
});





