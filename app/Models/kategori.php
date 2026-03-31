<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $fillable = ['nama'];

    public function resep()
    {
        return $this->hasMany(resep::class);
    }
}
