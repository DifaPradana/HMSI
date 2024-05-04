<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembelian extends Model
{
    use HasFactory;

    protected $guarded = ['id_pembelian'];

    protected $table = 'pembelian';


    public function produk()
    {
        return $this->hasMany(Produk::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
