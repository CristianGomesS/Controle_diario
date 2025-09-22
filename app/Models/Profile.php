<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use SoftDeletes;
    use HasFactory;
    //
    protected $table = "profiles";
    protected $fillable = [
        "name", "slug","created_at","updated_at","deleted_at",
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class, 'profile_id', 'id');
    }

    public function abilities()
    {
        return $this->belongsToMany(Ability::class, 'profile_abilities', 'profile_id', 'ability_id');
    }
}
