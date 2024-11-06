<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Orden;

class OrdenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Orden::create([
            'numeroFactura' => 1,
            'estado' => 'En proceso',
            'fotoUrl' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fdimensional-heroes.fandom.com%2Fwiki%2FSleep_Kirby&psig=AOvVaw3USoEiqCFkgNT65VQkWakw&ust=1730935539954000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCPiarcKrxokDFQAAAAAdAAAAABAE',
            'fecha' => Carbon::today()->toDateString(),
            'hora' => Carbon::now()->format('H:i:s'),
            'direccion' => 'direccion fake',
            'comentarios' => 'Orden complicada en progreso',
        ]);
    }
}
