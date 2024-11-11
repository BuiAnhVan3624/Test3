<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'products';
    public $fillable = [
        'name',
        'description',
        'status',
        'category_id'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function variant() {
        return $this->hasMany(Variant::class);
    }

    // public function image() {
    //     return $this->hasMany(Image::class);
    // }
}
