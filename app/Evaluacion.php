<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    use HasFactory;

    public function factors()
    {
        return $this->hasMany(Factor::class);
    }

    public function familia()
    {
        return $this->belongsTo(Familia::class);
    }
}
