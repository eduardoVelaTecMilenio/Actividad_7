<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Estudiante;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('estudiantes')->insert([
            'contrasena'=>'Adm@2022',
            'primerNombre'=>'Jose',
            'segundoNombre'=>'Eduardo',
            'apellidoPaterno'=>'Santos',
            'apellidoMaterno'=>'Solis',
            'genero'=>'Hombre',
            'telefono'=>'95 4852 5846',
            'correoElectronico'=>'student@robotics.com',
            'grupo'=>'105',
        ]);

    }
}
