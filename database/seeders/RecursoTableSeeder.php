<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RecursoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('recursos')->insert([
            'nombre_recurso'=>'dinero',
            'tipo'=>'comercial',
            'fecha_recurso'=>'2001-02-04',
        ]);
    }
}
