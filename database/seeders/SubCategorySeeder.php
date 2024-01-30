<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subCategory = [
            [
                'subcategory_name' => 'Appartement',
                'category_id' => 1,
            ],
            [
                'subcategory_name' => 'Maison',
                'category_id' => 1,
            ],
            [
                'subcategory_name' => 'Terrain',
                'category_id' => 1,
            ],

            [
                'subcategory_name' => 'Peugeot',
                'category_id' => 2,
            ],
            [
                'subcategory_name' => 'Renault',
                'category_id' => 2,
            ],
            [
                'subcategory_name' => 'Volkswagen',
                'category_id' => 2,
            ],
            [
                'subcategory_name' => 'Mercedes',
                'category_id' => 2,
            ],
            [
                'subcategory_name' => 'BMW',
                'category_id' => 2,
            ],
            [
                'subcategory_name' => 'Audi',
                'category_id' => 2,
            ],
            [
                'subcategory_name' => 'Yamaha',
                'category_id' => 3,
            ],
            [
                'subcategory_name' => 'Honda',
                'category_id' => 3,
            ],
            [
                'subcategory_name' => 'BMW',
                'category_id' => 3,
            ],
            [
                'subcategory_name' => 'Kawasaki',
                'category_id' => 3,
            ],
            [
                'subcategory_name' => 'Suzuki',
                'category_id' => 3,
            ],
            [
                'subcategory_name' => 'Homme',
                'category_id' => 4,
            ],
            [
                'subcategory_name' => 'Femme',
                'category_id' => 4,
            ],
            [
                'subcategory_name' => 'Enfant',
                'category_id' => 4,
            ],
            [
                'subcategory_name' => 'Maternité',
                'category_id' => 4,
            ],
            [
                'subcategory_name' => 'Refrigérateur',
                'category_id' => 5,
            ],
            [
                'subcategory_name' => 'Lave-linge',
                'category_id' => 5,
            ],
            [
                'subcategory_name' => 'Lave-vaisselle',
                'category_id' => 5,
            ],
            [
                'subcategory_name' => 'Congélateur',
                'category_id' => 5,
            ],
            [
                'subcategory_name' => 'Four',
                'category_id' => 5,
            ],
            [
                'subcategory_name' => 'Table',
                'category_id' => 6,
            ],
            [
                'subcategory_name' => 'Canapé',
                'category_id' => 6,
            ],
            [
                'subcategory_name' => 'Femme',
                'category_id' => 6,
            ],            [
                'subcategory_name' => 'Chaise ou Tabouret',
                'category_id' => 6,
            ],
            [
                'subcategory_name' => 'Lit',
                'category_id' => 6,
            ],
            [
                'subcategory_name' => 'Meuble de cuisine',
                'category_id' => 6,
            ],
            [
                'subcategory_name' => 'Miroir',
                'category_id' => 7,
            ],
            [
                'subcategory_name' => 'Tableau',
                'category_id' => 7,
            ],
            [
                'subcategory_name' => 'Tapis',
                'category_id' => 7,
            ],
            [
                'subcategory_name' => 'Lustre',
                'category_id' => 7,
            ],
            [
                'subcategory_name' => 'Lampe à poser',
                'category_id' => 7,
            ],

        ];
        foreach ($subCategory as $subCategoryData) {
            SubCategory::create($subCategoryData);
        }
    }
}
