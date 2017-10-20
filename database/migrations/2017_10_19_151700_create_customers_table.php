<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('business_name');
            $table->string('business_address');
            $table->string('city');
            $table->integer('state_id')->unsigned();
            $table->string('zip_code', 10);
            $table->string('phone', 12);
            $table->string('email');
            $table->string('loan_amount');
            $table->string('need_timeframe');
            $table->integer('reason_id')->unsigned();
            $table->timestamps();
        });
        
        Schema::table('customers', function (Blueprint $table) {
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('reason_id')->references('id')->on('reasons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
