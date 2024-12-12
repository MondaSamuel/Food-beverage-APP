<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            [
                'name' => 'Fruits',
                'description' => 'Lorem ipsum dolor sit amet',
                'image' => 'fruits.png',
            ],
            [
                'name' => 'Vegetables',
                'description' => 'Lorem ipsum dolor sit amet',
                'image' => 'vegetables.png',
            ],
            [
                'name' => 'Groceries',
                'description' => 'Lorem ipsum dolor sit amet',
                'image' => 'groceries.png',
            ],
            [
                'name' => 'Dairy',
                'description' => 'Lorem ipsum dolor sit amet',
                'image' => 'dairy.png',
            ],
            [
                'name' => 'Bakery',
                'description' => 'Lorem ipsum dolor sit amet',
                'image' => 'bakery.png',
            ],
            [
                'name' => 'Fish',
                'description' => 'Lorem ipsum dolor sit amet',
                'image' => 'fish.png',
            ],
            [
                'name' => 'Meat',
                'description' => 'Lorem ipsum dolor sit amet',
                'image' => 'meat.png',
            ],
            [
                'name' => 'Beverage',
                'description' => 'Lorem ipsum dolor sit amet',
                'image' => 'beverage.png',
            ],
        ];

        foreach ($categories as $categoryData) {
            DB::transaction(function () use ($categoryData) {
                $category = Category::updateOrCreate(
                    ['name' => $categoryData['name']],
                    ['description' => $categoryData['description']]
                );

                $imagePath = public_path('images/categories/' . $categoryData['image']);

                // Add media only if it doesn't exist
                if (file_exists($imagePath) && !$category->hasMedia('primary')) {
                    $category->addMedia($imagePath)->toMediaCollection('primary');
                }
            });
        }
    }
}
