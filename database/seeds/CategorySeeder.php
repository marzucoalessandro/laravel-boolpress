<?php

use Illuminate\Database\Seeder;
use App\category;
use Faker\Generator as Faker;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 50; $i++) {
        $item = new category();
        $item->name = $faker->name();
        $item->description = $faker->text($maxNbChars = 200);
        $item->save();
    }
  }
}
