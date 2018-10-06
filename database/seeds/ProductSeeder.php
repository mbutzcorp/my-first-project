<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
        	Product::create(['name' => 'Product '.$i, 'price' => $i.'000', 'stock' => 10 + $i ]);
        }
    }
}
