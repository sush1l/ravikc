<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GatibidhiModel extends Model
{
    protected $table = "gatibidhi";
    public $timestamps = true;
    public $fillable= [
        'u_date',	'u_time',	'title',	'photo',	'description',
    ];
}
