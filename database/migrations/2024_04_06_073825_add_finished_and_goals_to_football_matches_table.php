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
        Schema::table('football_matches', function (Blueprint $table) {
            $table->boolean('finished')->default(false);
            $table->smallInteger('goals_team_home')->default(0);
            $table->smallInteger('goals_team_away')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('football_matches', function (Blueprint $table) {
            $table->dropColumn('finished');
            $table->dropColumn('goals_team_home');
            $table->dropColumn('goals_team_away');
        });
    }
};
