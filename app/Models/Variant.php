<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Variant extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'variant';
    public $fillable = [
        'product_id',
        'quantity',
        'color',
        'price',
        'price_khuyen_mai',
        'start_date',
        'end_date',
        'image_main',
        'image_album',
        'status'
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }

    // public function image() {
    //     return $this->hasMany('image');
    // }
}
