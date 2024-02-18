<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AudioSancharModel extends Model
{
   protected $table = "audiosanchar";
   public $timestamps = true;
   public $fillable = [
       'title',	'description',	'file',	'u_date',	'u_date_ad',	'u_time',
   ];
}
