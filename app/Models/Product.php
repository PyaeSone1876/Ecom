<?php

namespace App\Models;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'image', 'description', 'color', 'size', 'category_id'];

    // protected function image(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value) => Storage::url($value)
    //     );
    // }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
