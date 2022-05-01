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
        Schema::create('gamedatas', function (Blueprint $table) {
            $table->id();

            $table->number('timer');
            $table->number('vuelta');
            $table->number('nVueltas');
            $table->number('ejeX');
            $table->number('ejeY');
            $table->string('user');
            $table->string('map');

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
        Schema::dropIfExists('gamedatas');
    }
};
