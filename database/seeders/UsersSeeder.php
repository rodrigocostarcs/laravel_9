<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    # comando para criar um seeder php artisan make:seeder UsersSeeder
    public function run()
    {
        User::create([
            'name' => 'Rodrigo Costa',
            'email' => 'rodrigocosta@outlook.it',
            'password' => bcrypt('12345678')
        ]);
    }
}
