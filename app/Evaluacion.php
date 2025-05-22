<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function factor()
    {
        return $this->hasOne(Factor::class);
    }

    public function familia()
    {
        return $this->belongsTo(Familia::class);
    }
}
