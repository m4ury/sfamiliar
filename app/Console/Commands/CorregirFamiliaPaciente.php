<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Paciente;
use App\Familia;

class CorregirFamiliaPaciente extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'paciente:corregir-familia {identificador}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Corrige el familia_id de un paciente si la familia asociada no existe. Se puede pasar ID o RUT del paciente.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $identificador = $this->argument('identificador');

        // Buscar paciente por ID o RUT
        $paciente = is_numeric($identificador)
            ? Paciente::find($identificador)
            : Paciente::where('rut', $identificador)->first();

        if (!$paciente) {
            $this->error("Paciente no encontrado con ID/RUT: $identificador");
            return;
        }

        // Verificar si familia_id existe en la tabla familias
        if ($paciente->familia_id && !Familia::where('id', $paciente->familia_id)->exists()) {
            $paciente->familia_id = null;
            $paciente->save();
            $this->info("Se corrigió el familia_id del paciente con ID/RUT: $identificador");
        } else {
            $this->info("No fue necesario corregir el familia_id del paciente con ID/RUT: $identificador");
        }
    }
}
