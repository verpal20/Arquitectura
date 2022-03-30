<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //Hace un llamado a la clase usertableseeder
        $this->call(UserTableSeeder::class);
        $this->call(RecursoTableSeeder::class);
        $this->call(EstudianteTableSeeder::class);
        $this->call(MateriaTableSeeder::class);
    }
}
