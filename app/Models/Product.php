<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'price',
        'image',
        'description',
        'color',
    ];

    // protected function image(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value) => Storage::url($value)
    //     );
    // }
}
