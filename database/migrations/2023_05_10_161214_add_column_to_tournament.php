<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToTournament extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tournament', function (Blueprint $table) {
            $table->string('registration_fee')->nullable()->after('admin_gcash');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tournament', function (Blueprint $table) {
            $table->string('registration_fee')->nullable()->after('id');
        });
    }
}
