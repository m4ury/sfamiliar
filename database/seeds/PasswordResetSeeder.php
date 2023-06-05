<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\User;

class PasswordResetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['rut' => '16808624-5', 'password' => Hash::make('maxy2001'), 'name' => 'mauricio', 'apellido_paterno' => 'Morales', 'email' => 'mauriciomorales0410@gmail.com']);
    }
}
