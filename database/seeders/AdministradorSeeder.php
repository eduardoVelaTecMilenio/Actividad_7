<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Administrador;

class AdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('administradors')->insert([
            'contrasena'=>'Adm@2022',
            'primerNombre'=>'Jorge',
            'segundoNombre'=>'Antonio',
            'apellidoPaterno'=>'Perez',
            'apellidoMaterno'=>'Lopez',
            'genero'=>'Hombre',
            'telefono'=>'78 8525 5964',
            'correoElectronico'=>'admon@robotics.com',
        ]);

    }
}
