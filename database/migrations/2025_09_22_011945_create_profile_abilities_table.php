<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('profile_abilities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profile_id')->constrained('profiles');
            $table->foreignId('ability_id')->constrained('abilities');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profile_abilities');
    }
};
