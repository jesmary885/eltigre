<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jesmary',
            'apellido' => 'Carneiro',
            'email' => 'jesmary885@gmail.com',
            'password' => bcrypt('12345678'),
         
            'telefono' => '5196448027',
        ]);
    }
}
