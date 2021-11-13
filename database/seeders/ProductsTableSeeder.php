<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::create([
            'product_name'=>'iphone 13 pro',
            'price'=>25,
            'avatar'=>'image.jpg'
        ]);
    }
}
