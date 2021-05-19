<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\LaravelMigrationSeeder;

class LaravelMigrationSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 10; $i++) {
        $LaravelMigrationSeeder_object = new LaravelMigrationSeeder();
        $LaravelMigrationSeeder_object->date = $faker->date();
        $LaravelMigrationSeeder_object->destination = $faker->city();
        $LaravelMigrationSeeder_object->country = $faker->state();
        $LaravelMigrationSeeder_object->people = $faker->numberBetween(0, 100);
        $LaravelMigrationSeeder_object->category = $faker->randomElement(['Beach', 'Mountain', 'Hill', 'Forest', 'Desert', 'Canyon']);
        $LaravelMigrationSeeder_object->price = $faker->numberBetween(300, 5000);
        $LaravelMigrationSeeder_object->save();
      }
    }
}
