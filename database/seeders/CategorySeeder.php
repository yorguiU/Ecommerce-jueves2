<?php

namespace Database\Seeders;

use App\Models\categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoriesPhones = new categories();
        $categoriesPhones->name = 'Phones';
        $categoriesPhones->save();

        $categoriesComputers = new categories();
        $categoriesComputers->name = 'Computers';
        $categoriesComputers->save();
    }
}
