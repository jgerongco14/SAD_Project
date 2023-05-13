<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tournament_players', function (Blueprint $table) {
            $table->string('status')->nullable()->after('player_proof_of_payment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tournament_players', function (Blueprint $table) {
            $table->string('status')->nullable()->after('player_proof_of_payment');
        });
    }
}
