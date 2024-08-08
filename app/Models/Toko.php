<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;

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
    public function user()
    {
        return $this->belongsTo(user::class, 'id_seller');
    }
}
