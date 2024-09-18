<?php

namespace App\Models;

use App\Traits\RecordsAdminHistory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Toko extends Model
{
    use HasFactory, RecordsAdminHistory;

    // Table name
    protected $table = 'toko';

    // Primary key
    protected $primaryKey = 'id_toko';

    // Fillable fields
    protected $fillable = [
        'id_seller',
        'nama_toko',
        'alamat_toko',
        'foto_profile_toko'
    ];

    // Timestamps
    public $timestamps = true;

    // Optionally, you can define relationships if needed
    // Example: relationship with Seller
    // Di model Toko
    public function user()
    {
        return $this->belongsTo(User::class, 'id_seller', 'id');
    }

    public function products()
    {
        return $this->hasMany(product::class, 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
