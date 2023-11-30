<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $fillable = [
        'uuid', 'title',  'description', 'image'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function($model) {
            $model->uuid = Str::uuid();
        });
    }

    protected function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::createFromFormat('Y-m-d H:i:s', $value)->translatedFormat('d F Y H:i'),
        );
    }

    protected function updatedAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::createFromFormat('Y-m-d H:i:s', $value)->translatedFormat('d F Y H:i'),
        );
    }
    
}
