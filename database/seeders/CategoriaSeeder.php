<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            ['categoria' => 'Industrias manufactureras','foto' => 'cat_1.jpg'],
            ['categoria' => 'Artesanías','foto' => 'cat_2.jpg'],
            ['categoria' => 'Productos y servicios alimenticios','foto' => 'cat_3.jpg'],
            ['categoria' => 'Agricultura y ganadería','foto' => 'cat_4.jpg'],
            ['categoria' => 'Comercio al por menor de computadores, equipos periféricos, programas de informática y equipos de telecomunicaciones','foto' => 'cat_5.jpg'],
            ['categoria' => 'Productos y servicios para mascotas','foto' => 'cat_6.jpg'],
            ['categoria' => 'Actividades de la salud humana','foto' => 'cat_7.jpg'],
            ['categoria' => 'Actividades artísticas, de entretenimiento y recreación y otras actividades de servicios','foto' => 'cat_8.jpg'],
            ['categoria' => 'Comercio al por menor en establecimientos','foto' => 'cat_9.jpg'],
            ['categoria' => 'Actividades profesionales y técnicas','foto' => 'cat_8.jpg'],

        ];

        foreach ($categorias as $item) {
            DB::table('categorias')->insert([
                'categoria' => $item['categoria'],
                'foto' => $item['foto'],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
