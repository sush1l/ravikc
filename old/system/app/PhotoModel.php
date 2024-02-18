<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoModel extends Model
{
   protected $table = 'gallery';
   public $timestamps = true;
   public $fillable = [
       'title',	'photo',
   ];
}
