<?php

namespace Database\Seeders;

use App\Models\Negocio;
use App\Models\NegocioSubcategoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NegocioSubcategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $negocios_subcategorias = [
            [
               'negocio_id' => '1',
               'subcategoria_id' => '7',
           
            ],
            [
                'negocio_id' => '2',
               'subcategoria_id' => '3',
             ],
             [
                'negocio_id' => '3',
               'subcategoria_id' => '1',
             ],
             [
                'negocio_id' => '4',
               'subcategoria_id' => '9',
             ],
             [
                'negocio_id' => '5',
               'subcategoria_id' => '11',
             ],
             [
                'negocio_id' => '6',
               'subcategoria_id' => '13',
             ],
             [
                'negocio_id' => '7',
               'subcategoria_id' => '6',
             ],
            
         

            ];

            foreach ($negocios_subcategorias as $negocios_subcategoria){
                NegocioSubcategoria::create($negocios_subcategoria);
             }
    }
}
