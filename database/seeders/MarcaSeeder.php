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
               'name' => 'LG',
            ],
            [
                'name' => 'SONY',
             ],
             [
                'name' => 'ALCATEL',
             ],
             [
                'name' => 'HP',
             ],
             [
                'name' => 'DELL',
             ],
             [
                'name' => 'S/M',
             ],
            
         

            ];

             foreach ($marcas as $marca){
                Marca::create($marca);
             }
    }
}
