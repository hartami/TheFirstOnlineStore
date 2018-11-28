<?php

# database/seeds/ProductTableSeeder.php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder 
{
   public function run()
   {
   		Product::create([
            'name' => 'BELT',
            'price' => '€79',
            'image' => 'belt.jpg'
        ]);

        Product::create([
            'name' => 'HAT',
            'price' => '€79',
            'image' => 'hat.jpg'
        ]);

        Product::create([
            'name' => 'SCARF',
            'price' => '€79',
            'image' => 'scarf.jpg'
        ]);

        Product::create([
            'name' => 'BAG',
            'price' => '€79',
            'image' => 'bag.jpg'
        ]);

        //... add more product here
   }
   
}
