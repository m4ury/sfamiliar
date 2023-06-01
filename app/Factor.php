<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factor extends Model
{
    use HasFactory;

    public function evaluacion()
    {
        return $this->BelongsTo(Evaluacion::class);
    }
}
