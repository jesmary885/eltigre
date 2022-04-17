<?php

namespace Database\Seeders;

use App\Models\Marca;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marcas = [
            [
               'nombre' => 'LG',
            ],
            [
                'nombre' => 'SONY',
             ],
             [
                'nombre' => 'ALCATEL',
             ],
             [
                'nombre' => 'HP',
             ],
             [
                'nombre' => 'DELL',
             ],
             [
                'nombre' => 'S/M',
             ],
            
         

            ];

             foreach ($marcas as $marca){
                Marca::create($marca);
             }
    }
}
