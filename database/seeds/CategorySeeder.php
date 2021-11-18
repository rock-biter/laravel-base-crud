<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'horror',
            'action',
            'heroes',
            'drama',
        ];

        foreach($categories as $category){

            $newcategory = new Category;

            $newcategory->name = $category;
            
            $newcategory->save();

        }
    }
}
