<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bahan extends Model
{
    protected $fillable = ['bahan', 'resep_id'];

    public function resep()
    {
        return $this->belongsTo(resep::class);
    }
}
