<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class EstudianteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('estudiantes')->insert([
            'nombre'=>'veronica',
            'apellido'=>'palechor',
            'direccion'=>'calle 3',
            'telefono'=>'323423432',
        ]);
    }
}
