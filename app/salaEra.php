<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class salaEra extends Model
{
    public function patologia()
    {
        return $this->belongsTo(Patologia::class);
    }
}
