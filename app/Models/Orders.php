<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Orders extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'orders';

    protected $fillable = [
        'no_order',
        'tanggal_order',
        'quantity',
        'photo',
        'order_date',
        'id_user',
        'location',
        'harga',
        'product_id',
        'category_id',
        'toko_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function product()
    {
        return $this->hasMany(Product::class, 'product_id', 'id');
    }

    public function toko()
    {
        return $this->belongsTo(Toko::class, 'toko_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}