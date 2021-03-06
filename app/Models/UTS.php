<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UTS extends Model
{
    protected $table = 'produk';
    protected $fillable = [
        'kode_produk', 'nama_produk', 'harga', 'created_at', 'updated_at'
    ];
}
