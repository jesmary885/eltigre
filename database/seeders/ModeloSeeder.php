<?php

namespace Database\Seeders;

use App\Models\Modelo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modelos = [
            [
               'name' => 'LJ5',
               'marca_id' => '1'
            ],
            [
                'name' => 'P98',
                'marca_id' => '2'
             ],
             [
                'name' => 'AL8',
                'marca_id' => '3'
             ],
             [
                'name' => 'K8',
                'marca_id' => '4'
             ],
             [
                'name' => 'IK9',
                'marca_id' => '1'
             ],
             [
                'name' => 'S/M',
                'marca_id' => '6'
             ],
            ];

             foreach ($modelos as $modelo){
                Modelo::create($modelo);
             }
    }
}
