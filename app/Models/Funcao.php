<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcao extends Model
{
    //
    protected $table = "funcao";
    protected $fillable = [
        "name","slug","descricao","created_at","updated_at",
    ];
}
