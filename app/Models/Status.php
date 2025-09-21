<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //
    protected $table = "statuss";
    protected $fillable = [
        "name",
        "slug",
        "descricao",
        "tipo",
    ];
}
