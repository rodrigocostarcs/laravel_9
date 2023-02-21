<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        #chamando o seeder que criei. Para rodar este seed basta executar o comando. php artisan db:seed
        $this->call([
            UsersSeeder::class,
        ]);
    }
}
