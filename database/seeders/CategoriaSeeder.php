<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = [
            [
                'name' => 'ALIMENTOS',
                'slug' => Str::slug('Alimentos'),
                'icon' => '<i class="fas fa-apple-alt"></i>',
                'image' => 'categorias/ALIMENTOS.jpg'
            ],
            [
                'name' => 'SALUD',
                'slug' => Str::slug('Salud'),
                'icon' => '<i class="fas fa-medkit"></i>',
                'image' => 'categorias/SALUD.jpg'
             ],
             [
                'name' => 'EDUCACIÓN',
                'slug' => Str::slug('Educacion'),
                'icon' => '<i class="	fas fa-book-reader"></i>',
                'image' => 'categorias/EDUCACION.jpg'
             ],
             [
                'name' => 'TECNOLOGIA',
                'slug' => Str::slug('Tecnologia'),
                'icon' => '<i class="fas fa-mobile-alt"></i>',
                'image' => 'categorias/TECNOLOGIA.jpg'
             ],
             [
                'name' => 'HOGAR',
                'slug' => Str::slug('Hogar'),
                'icon' => '<i class="fas fa-toolbox"></i>',
                'image' => 'categorias/HOGAR.jpg'
             ],
             [
                'name' => 'MODA Y BELLEZA',
                'slug' => Str::slug('Moda y belleza'),
                'icon' => '<i class="fas fa-spa"></i>',
                'image' => 'categorias/MODA.png'
             ],
            ];

             foreach ($categorias as $categoria){

                $categoria = Categoria::create($categoria);

             
             }
    }
}
