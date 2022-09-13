<?php

use App\Models\store;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id('store_id');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('games_id')->references('games_id')->on('games');
            $table->timestamps();
        });

        store::create(['user_id'=>'1','games_id'=>'1']);
        store::create(['user_id'=>'2','games_id'=>'2']);
        store::create(['user_id'=>'3','games_id'=>'3']);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
};
