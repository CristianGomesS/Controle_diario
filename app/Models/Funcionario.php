<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Funcionario extends Model
{
    use SoftDeletes;
    use HasFactory;

    //
    protected $table = "funcionarios";
    protected $fillable = [
        "nome","email","cpf","profile_id","created_at","updated_at","deleted_at",
    ];
}

