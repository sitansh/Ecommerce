<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'peter Parker',
            'email'=>'peter@parker.com',
            'password'=>Hash::make('12345')
        ]);

    }
}
