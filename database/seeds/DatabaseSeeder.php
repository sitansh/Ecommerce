<?php

use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('products')->insert([
            [
            'name'=>'LG Mobile',
            "price"=>"200",
            "description"=>"A smartphone with 4GB ram and much more feature",
            "category"=>"mobile",
            "gallery"=>"https://images-na.ssl-images-amazon.com/images/I/71gag816F7L._SY741_.jpg"
            ],
            [
            'name'=>'Oppo Mobile',
            "price"=>"300",
            "description"=>"A smartphone with 6GB ram and much more feature",
            "category"=>"mobile",
            "gallery"=>"https://images.financialexpress.com/2017/07/oppo.jpg"
            ],
            [
            'name'=>'Panasonic TV',
            "price"=>"500",
            "description"=>"A smartTV  and much more feature",
            "category"=>"TV",
            "gallery"=>"https://i.gadgets360cdn.com/products/televisions/large/1548154655_832_panasonic_55-inch-led-ultra-hd-4k-tv-th-55cx700d.jpg"
            ],
            [
            'name'=>'Sony TV',
            "price"=>"500",
            "description"=>"A smartTV  and much more feature",
            "category"=>"TV",
            "gallery"=>"https://pocketnow.com/files/2020/05/Sony-Bravia.jpg"
            ],
            [
            'name'=>'LG Fridge',
            "price"=>"500",
            "description"=>"A smart refrigrator  and much more feature",
            "category"=>"fridge",
            "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTZZtYv4K3Ygj0AQqJJP4AW0gYSILyzVB8V1g&usqp=CAU"
            ],
        ]);
        // $this->call(UserSeeder::class);
    }
}
