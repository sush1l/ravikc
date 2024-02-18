<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoModel extends Model
{
    protected $table = "video";
    public $timestamps = true;
    public $fillable = [
        'title',	'description',	'file',	'u_date',	'u_date_ad',	'u_time',
    ];
}
