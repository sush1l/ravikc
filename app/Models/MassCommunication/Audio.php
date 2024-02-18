<?php

namespace App\Models\MassCommunication;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Audio extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title_en',
        'title_ne',
        'description_en',
        'description_ne',
        'upload_date_ad',
        'upload_date_bs',
        'file',

    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    public function File():Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? Storage::disk('public')->url($value) : '',
            set: fn ($value) => (!empty($value) && !is_string($value)) ? $value->store('audio', 'public') : null
        );
    }
}
