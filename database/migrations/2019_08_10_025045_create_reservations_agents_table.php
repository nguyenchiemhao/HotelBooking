<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsAgentsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('reservations_agents', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('first_name');
      $table->string('last_name');
      $table->string('address');
      $table->string('address_2')->nullable();
      $table->string('city');
      $table->string('country');
      $table->string('hotel_phone_number');
      $table->string('cellular_number')->nullable();
      $table->string('email_address');
      $table->unsignedBigInteger('gender');
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
    Schema::dropIfExists('reservations_agents');
  }
}