<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->text('about');
            $table->integer('id_user');
            $table->integer('age');
            $table->string('residence');
            $table->string('freelance');
            $table->string('address');
            $table->text('nameInfo')->nullable();
            $table->text('valueInfo')->nullable();
            $table->text('nameService');
            $table->text('valueService');
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
        Schema::dropIfExists('abouts');
    }
}
