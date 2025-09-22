<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users= [[
            "name"=> "Administrador",
            "email"=> "admin@admin.com",
            "password"=> "senha123",
            "cpf"=> "12345678911",
            "profile_id"=> 1,
        ]];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
