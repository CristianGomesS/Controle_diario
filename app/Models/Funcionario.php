<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Funcionario extends Model
{
    use SoftDeletes;

    //
    protected $table = "funcionario";
    protected $fillable = [
        "nome","email","cpf","id_profile","created_at","updated_at","deleted_at",
    ];
}

