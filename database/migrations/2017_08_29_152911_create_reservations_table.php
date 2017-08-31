<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('_categoriesID')->nullable()->unsigned();
			$table->foreign('_categoriesID')->references('id')->on('categories')->onDelete('restrict');
			$table->string('title');
			$table->string('firstName');
			$table->string('lastName');
			$table->date('arrival');
			$table->date('departure');
			$table->decimal('adults', 2, 0);
			$table->decimal('kids', 2, 0);
			$table->decimal('total', 10, 2);
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
        Schema::dropIfExists('reservations');
    }
}
