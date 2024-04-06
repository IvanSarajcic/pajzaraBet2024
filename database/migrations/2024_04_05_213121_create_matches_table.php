<?php

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
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->dateTime('kick_off'); // Stores both date and time
            $table->unsignedBigInteger('venue_id'); // Reference to venues table
            $table->unsignedBigInteger('team_home_id');
            $table->unsignedBigInteger('team_away_id');
            $table->timestamps();
    
            // Foreign keys
            $table->foreign('venue_id')->references('id')->on('venues')->onDelete('cascade');
            $table->foreign('team_home_id')->references('id')->on('teams')->onDelete('cascade');
            $table->foreign('team_away_id')->references('id')->on('teams')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches');
    }
};
