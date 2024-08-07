<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'title'=>'Apartment',
            'description'=>'Apartment Description',
        ]);

        Category::create([
            'title'=>'House',
            'description'=>'House Description',
        ]);

        Category::create([
            'title'=>'Flat',
            'description'=>'Flat Description',
        ]);
    }
}
