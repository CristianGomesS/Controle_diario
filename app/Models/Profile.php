<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use SoftDeletes;
    //
    protected $table = "profile";
    protected $fillable = [
        "name", "slug","created_at","updated_at","deleted_at",
    ];
}
