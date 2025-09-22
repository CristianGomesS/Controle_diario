<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcoes extends Model
{
    //
    use HasFactory;
    protected $table = "funcoes";
    protected $fillable = [
        "name","slug","descricao","created_at","updated_at",
    ];
}
