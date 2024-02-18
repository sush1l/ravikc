<?php

namespace App\Models\File;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class File extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'model_type',
        'model_id',
        'file_name',
        'file_extension',
        'file',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function model()
    {
        return $this->morphTo();
    }
    public function getFileUrlAttribute(): string
    {
        return Storage::disk('public')->url($this->attributes['file']);
    }
}
