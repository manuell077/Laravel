<?php

namespace App\Providers;
use Faker\{Factory, Generator};
use Smknstd\FakerPicsumImages\FakerPicsumImagesProvider;
use Illuminate\Support\ServiceProvider;

class FakerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->singleton(Generator::class, function () {
            $faker = Factory::create();
            $faker->addProvider(new FakerPicsumImagesProvider($faker));
            return $faker;
        });
    }
}
