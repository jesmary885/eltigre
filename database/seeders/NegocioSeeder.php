<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Negocio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NegocioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $negocios = [
            [
               'name' => 'LIBRERIA JJ',
               'direction' => 'Calle falsa nr1',
               'phone' => '02832555555',
               'mobile_phone' => '0414-1999999',
               'coordinates' => '589999',
               'plan' => 'full',
               'rif' => 'J-11111111-1',
               'delivery' => 'si',
               'delivery_price' => '3',
               'user_id' => '1'
            ],
            [
                'name' => 'PANIFICADORA',
                'direction' => 'Calle falsa nr2',
                'phone' => '02832555535',
                'mobile_phone' => '0414-1999989',
                'coordinates' => '5899995',
                'plan' => 'full',
                'rif' => 'J-11111111-2',
                'delivery' => 'si',
                'delivery_price' => '3',
                'user_id' => '1'
             ],
             [
                'name' => 'HORTALIZAS JI',
                'direction' => 'Calle falsa nr3',
                'phone' => '0283255535',
                'mobile_phone' => '0414-199999',
                'coordinates' => '5899959',
                'plan' => 'full',
                'rif' => 'J-11111111-2',
                'delivery' => 'si',
                'delivery_price' => '3',
                'user_id' => '1'
             ],
             [
                'name' => 'ACADEMIA DE BAILE RR',
                'direction' => 'Calle falsa nr4',
                'phone' => '02832555355',
                'mobile_phone' => '0414-1999959',
                'coordinates' => '5899995',
                'plan' => 'full',
                'rif' => 'J-11111111-5',
                'delivery' => 'si',
                'delivery_price' => '3',
                'user_id' => '1'
             ],
             [
                'name' => 'COMPUTER CENTER',
                'direction' => 'Calle falsa nr5',
                'phone' => '0283255355',
                'mobile_phone' => '0414-199959',
                'coordinates' => '589995',
                'plan' => 'full',
                'rif' => 'J-11111111-5',
                'delivery' => 'si',
                'delivery_price' => '3',
                'user_id' => '1'
             ],
             [
                'name' => 'LA LINDA',
                'direction' => 'Calle falsa nr6',
                'phone' => '0283255355',
                'mobile_phone' => '0414-199959',
                'coordinates' => '589995',
                'plan' => 'full',
                'rif' => 'J-11111111-6',
                'delivery' => 'si',
                'delivery_price' => '3',
                'user_id' => '1'
             ],
             [
                'name' => 'FARMACIA GT',
                'direction' => 'Calle falsa nr7',
                'phone' => '0283255355',
                'mobile_phone' => '0414-199959',
                'coordinates' => '589995',
                'plan' => 'full',
                'rif' => 'J-11111111-7',
                'delivery' => 'si',
                'delivery_price' => '3',
                'user_id' => '1'
             ],
            
         

            ];

             foreach ($negocios as $negocio){
                $negocio_creado= Negocio::create($negocio);
                Image::factory(4)->create([
                    'imageable_id' => $negocio_creado->id,
                    'imageable_type' => Negocio::class
                ]);
             }
    }
}
