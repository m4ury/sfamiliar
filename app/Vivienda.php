<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vivienda extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    public function familia()
    {
        return $this->belongsTo(Familia::class);
    }
}
