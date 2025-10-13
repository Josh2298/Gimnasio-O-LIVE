<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Asistencia;
use App\Models\Caja_log;
use App\Models\Caja;
use App\Models\Categoria;
use App\Models\Item;
use App\Models\Membresia;
use App\Models\Producto;
use App\Models\Promocion;
use App\Models\Venta;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        ///*
        //User::factory(20)->create();
        //Caja::factory(15)->create();
        //Categoria::factory(15)->create();
        //Membresia::factory(10)->create();
        //Producto::factory(20)->create();
        //Promocion::factory(15)->create();
        //Venta::factory(15)->create();
        //Item::factory(10)->create();
        //Asistencia::factory(10)->create();
        //Caja_log::factory(10)->create();
        //*/


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        /*
        User::create([
            'ci'=>'7353263',
            'nombre'=>'Jose',
            'apellido'=>'Miranda Antezana',
            'username'=>'josh2298',
            'password'=>'josh2298',
            'rol'=>'admin',
            'imagen'=>'imagen.jpg',
            'email'=>'admin@gmail.com'
        ]);
        */
    }
}
