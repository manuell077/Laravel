<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Images;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
     return [
            'name' => fake()->name(),
            'category_id' => Categoria::all()->random()->id
            

     ];
        
    }
}
