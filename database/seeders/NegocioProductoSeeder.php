<?php

namespace Database\Seeders;

use App\Models\NegocioProducto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NegocioProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $negocio_productos = [
            [
               'description' => 'Televisor pantalla plana',
               'price' => '58',
               'negocio_id' => '8',
               'producto_id' => '1',
            ],
            [
                'description' => 'Monitor led',
                'price' => '56',
               'negocio_id' => '8',
               'producto_id' => '2',
             ],
             [
                'description' => 'Computadora de mesa',
                'price' => '62',
               'negocio_id' => '8',
               'producto_id' => '3',
             ],
             [
                'description' => 'Portatil',
                'price' => '120',
               'negocio_id' => '8',
               'producto_id' => '4',
             ],
             [
                'description' => 'Mouse inalambrico',
                'price' => '15',
               'negocio_id' => '8',
               'producto_id' => '5',
             ],
             [
                'description' => 'Regulador de voltaje',
                'price' => '45',
               'negocio_id' => '8',
               'producto_id' => '6',
             ],
             [
                'description' => 'Libro de matematicas',
                'price' => '5',
               'negocio_id' => '1',
               'producto_id' => '7',
             ],
             [
                'description' => 'Lapiz Pape Mattel',
                'price' => '2',
               'negocio_id' => '7',
               'producto_id' => '8',
             ],
             [
                'description' => 'Lavadora',
                'price' => '58',
               'negocio_id' => '9',
               'producto_id' => '9',
             ],
             [
                'description' => 'Secadora',
                'price' => '58',
               'negocio_id' => '9',
               'producto_id' => '10',
             ],
             [
                'description' => 'Muebles',
                'price' => '58',
               'negocio_id' => '9',
               'producto_id' => '11',
             ],
             [
                'description' => 'Cocina electrica',
                'price' => '48',
               'negocio_id' => '9',
               'producto_id' => '12',
             ],
             [
                'description' => 'Horno microondas',
                'price' => '58',
               'negocio_id' => '9',
               'producto_id' => '13',
             ],
             [
                'description' => 'Pan frances',
                'price' => '1',
               'negocio_id' => '3',
               'producto_id' => '14',
             ],
             [
                'description' => 'Pan de sandwich',
                'price' => '2',
               'negocio_id' => '3',
               'producto_id' => '15',
             ],
            ];

             foreach ($negocio_productos as $negocio_producto){
                NegocioProducto::create($negocio_producto);
             }
    }
}
