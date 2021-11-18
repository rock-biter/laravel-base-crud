<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++){
            $newcomic = new Comic();

            $newcomic->title = $faker->words(6, true);
            $newcomic->author = $faker->name();
            $newcomic->description = $faker->paragraph(2);
            $newcomic->url = $faker->imageUrl(300, 400);
            $newcomic->save();

        }
    }
}
