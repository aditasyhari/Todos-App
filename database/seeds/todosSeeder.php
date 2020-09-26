<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class todosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        for($i=1; $i <= 20; $i++) {
            DB::table('todos')->insert([
                'name' => $faker->sentence(3),
                'description' => $faker->paragraph(4),
                'completed' => false
            ]);
        }

        //
        // factory(App\Todo::class, 20)->create();
        
    }
}
