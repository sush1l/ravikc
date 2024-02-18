<?php

namespace App\Models\Bio;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Bio extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'data',
        'photo'
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
