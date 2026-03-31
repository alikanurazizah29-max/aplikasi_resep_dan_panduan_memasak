<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class resep extends Model
{
    protected $fillable = ['nama', 'gambar', 'porsi', 'deskripsi', 'kategori_id'];

    public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }

    public function bahan()
    {
        return $this->hasMany(bahan::class);
    }

    public function langkah()
    {
        return $this->hasMany(langkah::class);
    }
}
