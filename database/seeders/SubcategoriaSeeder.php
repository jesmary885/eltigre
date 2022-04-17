<?php

namespace Database\Seeders;

use App\Models\Subcategoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategorias = [
            [
                'name' => 'FRUTAS Y HORTALIZAS',
                'slug' => Str::slug('Frutas y hortalizas'),
                'categoria_id' => '1'
            ],
            [
                'name' => 'SUPERMERCADO',
                'slug' => Str::slug('Supermercado'),
                'categoria_id' => '1'
             ],
             [
                'name' => 'PANADERIA',
                'slug' => Str::slug('Panaderia'),
                'categoria_id' => '1'
             ],
             
             [
                'name' => 'RESTAURANT',
                'slug' => Str::slug('Restaurant'),
                'categoria_id' => '1'
             ],
             [
                'name' => 'FRUTAS Y HORTALIZAS',
                'slug' => Str::slug('Frutas y hortalizas'),
                'categoria_id' => '1'
             ],
             [
                'name' => 'FARMACIA',
                'slug' => Str::slug('Farmacia'),
                'categoria_id' => '2'
             ],
             [
                'name' => 'ODONTOLOGÍA',
                'slug' => Str::slug('Odontologia'),
                'categoria_id' => '2'
             ],
             [
                'name' => 'LIBRERIA Y PAPELERIA',
                'slug' => Str::slug('Libreria y papeleria'),
                'categoria_id' => '3'
             ],
             [
                'name' => 'ACADEMIA',
                'slug' => Str::slug('Academia'),
                'categoria_id' => '3'
             ],
             [
                'name' => 'ESCUELA',
                'slug' => Str::slug('Escuela'),
                'categoria_id' => '3'
             ],
             [
                'name' => 'TIENDA DE COMPUTADORAS',
                'slug' => Str::slug('Tienda de computadoras'),
                'categoria_id' => '4'
             ],
             [
                'name' => 'TIENDA DE TELEFONOS',
                'slug' => Str::slug('Tienda de telefonos'),
                'categoria_id' => '4'
             ],
             [
                'name' => 'TIENDA DE LINEA BLANCA',
                'slug' => Str::slug('Tienda de linea blanca'),
                'categoria_id' => '5'
             ],
             [
                'name' => 'TIENDA DE ROPA',
                'slug' => Str::slug('Tienda de ropa'),
                'categoria_id' => '6'
             ],
             [
                'name' => 'SALON DE BELLEZA',
                'slug' => Str::slug('Salon de belleza'),
                'categoria_id' => '6'
             ],
            ];

            foreach ($subcategorias as $subcategoria){
                Subcategoria::create($subcategoria);
             }
    }
}
