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
                'icon' => '<i class="fas fa-apple-alt"></i>'
            ],
            [
                'name' => 'SALUD',
                'slug' => Str::slug('Salud'),
                'icon' => '<i class="fas fa-medkit"></i>'
             ],
             [
                'name' => 'EDUCACIÓN',
                'slug' => Str::slug('Educacion'),
                'icon' => '<i class="	fas fa-book-reader"></i>'
             ],
             [
                'name' => 'TECNOLOGIA',
                'slug' => Str::slug('Tecnologia'),
                'icon' => '<i class="fas fa-mobile-alt"></i>'
             ],
             [
                'name' => 'HOGAR',
                'slug' => Str::slug('Hogar'),
                'icon' => '<i class="fas fa-toolbox"></i>'
             ],
             [
                'name' => 'MODA Y BELLEZA',
                'slug' => Str::slug('Moda y belleza'),
                'icon' => '<i class="fas fa-spa"></i>'
             ],
            ];

             foreach ($categorias as $categoria){

                $categoria = Categoria::factory(1)->create($categoria)->first();

             
             }
    }
}
