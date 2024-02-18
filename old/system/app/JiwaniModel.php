<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JiwaniModel extends Model
{
    protected $table = 'jiwani';
    public $timestamp = true;
    public $fillable = [
        'photo',    'jiwani',
    ];
}
