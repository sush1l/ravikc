<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewspaperModel extends Model
{
    protected $table = "newspaper";
    public $timestamps = true;
    public $fillable = [
        'title',	'description',	'file',	'u_date',	'u_date_ad',	'u_time',
    ];
}
