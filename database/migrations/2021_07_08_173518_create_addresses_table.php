<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id()->index();
            $table->timestamps(); //creates 2 columns
            $table->text('firstname');
            $table->text('lastname');
            $table->string('address1');
            $table->string('address2')->nullable();
            $table->text('city');
            $table->text('state');
            $table->integer('zip');
            $table->string('email');
            $table->string('primaryphone');
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
