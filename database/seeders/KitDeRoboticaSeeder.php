<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\KitDeRobotica;

class KitDeRoboticaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kit_de_roboticas')->insert([
            'Nombre'=>'Starter Kit',
            'cursos'=>'1',
        ]);

        DB::table('kit_de_roboticas')->insert([
            'Nombre'=>'Educational Robotics Kit',
            'cursos'=>'2',
        ]);

        DB::table('kit_de_roboticas')->insert([
            'Nombre'=>'Kit 5',
            'cursos'=>'3',
        ]);
    }
}
