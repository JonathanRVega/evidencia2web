<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
            'nombre' => 'Jonathan Ramirez',
            'numeroCliente' => 1,
            'datosFiscales' => 'Informacion de datos fiscales',
        ]);
    }
}
