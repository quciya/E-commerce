<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      //  \App\Models\User::factory(10)->create();
        // Category::truncate();
        // Product::truncate();
        $category= Category:: create([
            'categories_name'=>'Printer',
            'categories_desc'=>'This belongs to printers'
        ]);
    //   Product::create([
    //       'product_name'=> 'Laser Printer',
    //       'product_desc'=> 'Laser Printer is required to print the papers',
    //       'price'=>'2000',
    //       'category_id'=>$category->id,

    //   ]);

    Product::factory(5)->create();
    }
}


