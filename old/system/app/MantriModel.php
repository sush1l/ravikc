<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MantriModel extends Model
{
    protected $table = "mantri";
    public $timestamps = true;
    public $fillable= [
        'u_date',	'u_time',	'title',	'photo',	'description',
    ];
}
