<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;

    protected $guarded = ['id_item'];
    protected $table = 'item';


    public function produk()
    {
        return $this->hasOne(Produk::class);
    }

    public function pembelian()
    {
        return $this->hasMany(Pembelian::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
