<?php

namespace Database\Seeders;

use App\Models\Funcionario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $funcionarios =[
            [   
                "name"=> "Administrador",
                "email"=> "teste@teste.com",
                "cpf"=> "12345678901",
                "profile_id"=> 1,
             ],
             [   
                "name"=> "usuario gestor",
                "email"=> "teste2@teste.com",
                "cpf"=> "12345678905",
                "profile_id"=> 2,
             ],
         
        ];

        foreach ($funcionarios as $funcionario) {
            Funcionario::firstOrCreate(
                ['email' => $funcionario['email']], 
                $funcionario 
            );
        }
    }
}
