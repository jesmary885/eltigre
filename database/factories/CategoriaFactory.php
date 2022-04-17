<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categoria>
 */
class CategoriaFactory extends Factory
{
    /**
    
     *
     * @return array<string, mixed>
     */

    protected $model = Categoria::class;

    public function definition()
    {
        return [
            'image' => 'categorias/' . $this->faker->image('public/storage/categorias', 640, 480, null, false) //imagen1.jpg
        ];
    }
}
