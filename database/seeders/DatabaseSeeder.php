<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Admin',
            'email' => "admin2@gmail.com",
            'phone' => 1212121212,
            'password' => Hash::make('123456') ,
            'admin' => 1
        ]);
        // Product::factory(40)->create();
    }
}
