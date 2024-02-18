<?php

namespace App\Models\Activities;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Activity extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title_ne',
        'title_en',
        'desc_ne',
        'desc_en',
        'upload_date_ad',
        'upload_date_bs',
        'photo',
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
