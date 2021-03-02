<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Control extends Model
{
    protected $guarded = ['id'];

    public function paciente()
    {
        return $this->$this->belongsTo(Paciente::class);
    }

    public function user()
    {
        return $this->$this->belongsTo(User::class);
    }
}
