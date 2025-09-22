<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Use o método $this->call() para executar outros seeders
        $this->call([
            ProfileSeeder::class,
            FuncionarioSeeder::class,
            userSeeder::class,
       
        ]);
    }
}
