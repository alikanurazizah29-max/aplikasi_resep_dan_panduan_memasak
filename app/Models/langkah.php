<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class langkah extends Model
{
    protected $fillable = ['langkah', 'resep_id'];

    public function resep()
    {
        return $this->belongsTo(resep::class);
    }
}
