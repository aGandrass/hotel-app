<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
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
			$table->string('title', 20);
			$table->string('firstname', 100);
			$table->string('lastname', 100);
			$table->string('language', 100);
			$table->string('street', 100);
			$table->string('zip', 6);
			$table->string('city', 100);
			$table->string('country', 100);
			$table->string('telephone', 20);
			$table->string('mobile', 20);
			$table->string('email', 50);
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
        Schema::dropIfExists('customers');
    }
}
