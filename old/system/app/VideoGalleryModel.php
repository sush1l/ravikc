<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoGalleryModel extends Model
{
    protected $table = 'videogallery';
    public $timestamps = true;
    public $fillable = [
        'title',	'video',
    ];
}
