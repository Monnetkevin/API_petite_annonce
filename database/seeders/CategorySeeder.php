<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = [
            ['category_name' => 'Immobilier'],
            ['category_name' => 'Voitures'],
            ['category_name' => 'Motos'],
            ['category_name' => 'Vêtements'],
            ['category_name' => 'Electroménager'],
            ['category_name' => 'Ameublement'],
            ['category_name' => 'Décoration'],
        ];

        foreach ($category as $categoryData) {
            Category::create($categoryData);
        }
    }
}
