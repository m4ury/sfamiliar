<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PacientePatologia extends Pivot
{
    public $table   = 'paciente_patologia';

}
