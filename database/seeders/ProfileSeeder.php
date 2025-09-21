<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profiles = [
            [
                "name" => "Administrador",
                "slug" => "administrador_slug"
            ],
            [
                "name" => "Gestor",
                "slug" => "gestor_slug"
            ],
            [
                "name" => "Motorista",
                "slug" => "motorista_slug"
            ],
        ];

        foreach ($profiles as $profile) {
            Profile::firstOrCreate(
                ['slug' => $profile['slug']],
                $profile
            );
        }
    }
}
