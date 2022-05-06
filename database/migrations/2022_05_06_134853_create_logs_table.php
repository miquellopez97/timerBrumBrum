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
        Schema::create('logs', function (Blueprint $table) {
            $table->id();

            $table->boolean('checkPoint1');
            $table->boolean('checkPoint2');
            $table->boolean('checkPoint3');
            $table->boolean('checkPoint4');
            $table->boolean('checkPoint5');
            $table->boolean('checkPoint6');
            $table->boolean('checkPoint7');
            $table->boolean('checkPoint8');

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
        Schema::dropIfExists('logs');
    }
};
