<?php

namespace Database\Seeders;


use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoriesPhones = new Category();
        $categoriesPhones->name = 'Phones';
        $categoriesPhones->save();

        $categoriesComputers = new Category();
        $categoriesComputers->name = 'Computers';
        $categoriesComputers->save();

        Category::factory(200)->create();
    }
}
