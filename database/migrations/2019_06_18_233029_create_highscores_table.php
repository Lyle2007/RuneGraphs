<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHighscoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('highscores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Character_Name');
            $table->string('Overall_XP');
            $table->string('Attack_XP');
            $table->string('Defence_XP');
            $table->string('Strength_XP');
            $table->string('Hitpoints_XP');
            $table->string('Ranged_XP');
            $table->string('Prayer_XP');
            $table->string('Magic_XP');
            $table->string('Cooking_XP');
            $table->string('Woodcutting_XP');
            $table->string('Fletching_XP');
            $table->string('Fishing_XP');
            $table->string('Firemaking_XP');
            $table->string('Crafting_XP');
            $table->string('Smithing_XP');
            $table->string('Mining_XP');
            $table->string('Herblore_XP');
            $table->string('Agility_XP');
            $table->string('Thieving_XP');
            $table->string('Slayer_XP');
            $table->string('Farming_XP');
            $table->string('Runecrafting_XP');
            $table->string('Hunter_XP');
            $table->string('Construction_XP');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('highscores');
    }
}
