<?php

use App\Models\game;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id('games_id');
            $table->string('publisher',30);
            $table->string('studio',20);
            $table->string('title',30);
            $table->timestamps();
        });

        game::create(['publisher'=>'EA','studio'=>'Dice', 'title'=>'Battlefield']);
        game::create(['publisher'=>'Bethesda','studio'=>'Bethesda', 'title'=>'Fallout']);
        game::create(['publisher'=>'Ubisoft','studio'=>'Ubisoft Montreal', 'title'=>'Rainbow 6 siege']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
};
