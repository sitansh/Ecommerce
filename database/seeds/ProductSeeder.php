<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

        DB::table('products')->insert([
            'name'=>'LG Mibile',
            "price"=>"200",
            "description"=>"A smartphone with 4GB ram and much more feature",
            "category"=>"mobile",
            "gallery"=>"https://images-na.ssl-images-amazon.com/images/I/71gag816F7L._SY741_.jpg",
            ])
    {
        //
    }
}
