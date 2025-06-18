<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Images;
use App\Models\Post;
use App\Models\Producto;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(10)->create();
         Categoria::factory(10)->create()->each(
            function(Categoria $category){
                echo $category->id;
            }
        );
        Producto::factory(10)->create()->each(
            function(Producto $producto){
              Images::factory()->create([
                'imageable_id'=>$producto->id,
                'imageable_type'=>Producto::class
              ]);

            }
        );
        Post::factory(78)->create()->each(
            function(Post $post){
              Images::factory(4)->create([
                'imageable_id'=>$post->id,
                'imageable_type'=>Post::class
              ]);

            }
        );

        


        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
