<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p1 = [

            'name' => 'Learn to build in Html5',
            'image' => 'uploads/products/book.png',
            'price' => 5000,
            'description' => 'loren ipsum dolor sit amet'

        ];

        $p2 = [

            'name' => 'Producto Develop in depth',
            'image' => 'uploads/products/book.png',
            'price' => 2400,
            'description' => 'loren ipsum dolor sit amet'

        ];


        Product::create($p1);
        Product::create($p2);



    }
}
