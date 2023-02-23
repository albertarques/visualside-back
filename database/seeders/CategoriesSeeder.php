<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Categories::create([
            'id'=>'1',
            'name'=>'direccion',
        ]);
        \App\Models\Categories::create([
            'id'=>'2',
            'name'=>'estilismo',
        ]);
        \App\Models\Categories::create([
            'id'=>'3',
            'name'=>'produccion',
        ]);
        \App\Models\Categories::create([
            'id'=>'4',
            'name'=>'guionaje',
        ]);
        \App\Models\Categories::create([
            'id'=>'5',
            'name'=>'actor',
        ]);
        \App\Models\Categories::create([
            'id'=>'6',
            'name'=>'actriz',
        ]);
        \App\Models\Categories::create([
            'id'=>'7',
            'name'=>'operadores de camara, luces y equipo',
        ]);
        \App\Models\Categories::create([
            'id'=>'8',
            'name'=>'montajista, atrezzista',
        ]);
    }
}
