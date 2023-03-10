<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Profesor;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('profesors')->insert([
            'contrasena'=>'Adm@2022',
            'primerNombre'=>'Juan',
            'segundoNombre'=>'Mateo',
            'apellidoPaterno'=>'Gutierrez',
            'apellidoMaterno'=>'Jimenez',
            'genero'=>'Hombre',
            'telefono'=>'45 8595 8544',
            'correoElectronico'=>'tecmilenio@robotics.com',
            'cursos'=>'1',
        ]);

    }
}
