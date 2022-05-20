<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       /* Storage::deleteDirectory('public/negocios');
        Storage::makeDirectory('public/negocios');
        Storage::deleteDirectory('public/categorias');
        Storage::makeDirectory('public/categorias');*/

        $this->call(UserSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(NegocioSeeder::class);
       
       $this->call(SubcategoriaSeeder::class);
       $this->call(NegocioSubcategoriaSeeder::class);
       $this->call(MarcaSeeder::class);
       $this->call(ModeloSeeder::class);
       $this->call(ProductoSeeder::class);
       $this->call(NegocioProductoSeeder::class);
    }
}
