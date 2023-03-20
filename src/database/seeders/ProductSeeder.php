<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Sequence;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory(10)->create();

        $categories = ProductCategory::factory(4)->create();

        Product::factory(10)->state(new Sequence(
            [
                'category_id' => $categories[1]->id
            ],
            [
                'category_id' => $categories[2]->id
            ],
            [
                'category_id' => $categories[3]->id
            ]
        ))->create();
        
    }
}
