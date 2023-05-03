<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTournament extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournament', function (Blueprint $table) {
            $table->id()->unique();
            $table->foreignId('user_id')->constrained('users');
            $table->string('tournament_title');
            $table->string('tournament_logo')->nullable();
            $table->string('date_of_the_tournament');
            $table->string('start_date_of_registration');
            $table->string('end_date_of_registration');
            $table->string('category');
            $table->string('age_range');
            $table->string('address');
            $table->string('province');
            $table->string('city');
            $table->string('tournament_description');
            $table->string('name_of_organizer');
            $table->string('contactNumber');
            $table->string('email');
            $table->string('sponsor');
            $table->string('poster');
            $table->string('poster_title');
            $table->string('poster_description');
            $table->string('admin_gcash');
            $table->string('proof_of_payment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tournament');
    }
}
