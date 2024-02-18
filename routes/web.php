<?php

use App\Http\Controllers\Activities\ActivityController;
use App\Http\Controllers\Activities\ActivityTypeController;
use App\Http\Controllers\Bio\BioController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Gallery\GalleryController;
use App\Http\Controllers\MassCommunication\AudioController;
use App\Http\Controllers\MassCommunication\NewspapersController;
use App\Http\Controllers\MassCommunication\videoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index'])->name('welcome');
Route::get('category', [FrontendController::class, 'category'])->name('category');
Route::get('newspaper', [FrontendController::class, 'newspaper'])->name('newspaper');
Route::get('video', [FrontendController::class, 'video'])->name('video');
Route::get('bio', [FrontendController::class, 'bio'])->name('bio');
Route::get('audio', [FrontendController::class, 'audio'])->name('audio');
Route::get('gallery', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('contact', [FrontendController::class, 'contactStore'])->name('contact.store');
Route::get('activity/{activity}/singleActivity', [FrontendController::class, 'singleactivity'])->name('activities.singleActivity');
Route::get('newspaper/{newspaper}/singleNewspaper', [FrontendController::class, 'singlenewspaper'])->name('newspapers.singleNewspaper');
Route::get('video/{video}/singlepaVideo', [FrontendController::class, 'singlevideo'])->name('videos.singleVideo');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::middleware('auth')->prefix('admin')->as('admin.')->group(function () {

    Route::prefix('activity')->group(function () {
        Route::resource('activityType', ActivityTypeController::class);
        Route::resource('activity', ActivityController::class);
    });

    Route::prefix('mass-communication')->as('mass-communication.')->group(function () {
        Route::resource('audio', AudioController::class);
        Route::resource('video', videoController::class);
        Route::resource('newspaper', NewspapersController::class);
    });
    Route::delete('file/{file}/deleteFile', [GalleryController::class, 'deleteImage'])->name('file.deleteFile');
    Route::resource('gallery', GalleryController::class);
    Route::resource('bio', BioController::class);
    Route::resource('contact', ContactController::class)->only(['index', 'show', 'store']);

    Route::get('/dashboard', function () {
        return view('dashboard'); 
    })->middleware(['auth', 'verified'])->name('dashboard');
    Route::view('about', 'about')->name('about');
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    Route::post('file-upload', [FileController::class, 'store'])->name('file.upload');
});

Route::view('activity', 'Activity_Type.index')->name('activity');
