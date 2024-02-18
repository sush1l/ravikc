<?php

namespace App\Models\MassCommunication;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Newspaper extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title_en',
        'title_ne',
        'photo',
        'des_ne',
        'des_en',
        'upload_date_bs',
        'upload_date_ad',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    public function Photo():Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? Storage::disk('public')->url($value) : '',
            set: fn ($value) => (!empty($value) && !is_string($value)) ? $value->store('newspapers', 'public') : null
        );
    }
}
