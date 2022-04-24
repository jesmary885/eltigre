<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productos = [
            [
               'name' => 'Televisor pantalla plana',
               'slug' => 'televisor_pantalla_plana',
               'modelo_id' => '1',
            ],
            [
                'name' => 'Monitor led',
                'slug' => 'monitor_led',
                'modelo_id' => '1',
             ],
             [
                'name' => 'Computadora de mesa',
                'slug' => 'Computadora_de_mesa',
                'modelo_id' => '2',
             ],
             [
                'name' => 'Portatil',
                'slug' => 'Portatil',
                'modelo_id' => '1',
             ],
             [
                'name' => 'Mouse inalambrico',
                'slug' => 'Mouse_inalambrico',
                'modelo_id' => '1',
             ],
             [
                'name' => 'Regulador de voltaje',
                'slug' => 'Regulador_de_voltaje',
                'modelo_id' => '3',
             ],
             [
                'name' => 'Libro de matematicas',
                'slug' => 'Libro_de_matematica',
                'modelo_id' => '4',
             ],
             [
                'name' => 'Lapiz Pape Mattel',
                'slug' => 'Lapiz Pape Mattel',
                'modelo_id' => '4',
             ],
             [
                'name' => 'Lavadora',
                'slug' => 'Lavadora',
                'modelo_id' => '5',
             ],
             [
                'name' => 'Secadora',
                'slug' => 'Secadora',
                'modelo_id' => '5',
             ],
             [
                'name' => 'Muebles',
                'slug' => 'muebles',
                'modelo_id' => '5',
             ],
             [
                'name' => 'Cocina electrica',
                'slug' => 'Cocina_electrica',
                'modelo_id' => '5',
             ],
             [
                'name' => 'Horno microondas',
                'slug' => 'Horno_microondas',
                'modelo_id' => '5',
             ],
             [
                'name' => 'Pan frances',
                'slug' => 'Pan_frances',
                'modelo_id' => '6',
             ],
             [
                'name' => 'Pan de sandwich',
                'slug' => 'Pan_de_sandwich',
                'modelo_id' => '6',
             ],
            
         

            ];

             foreach ($productos as $producto){
                Producto::create($producto);
             }
    }
}
