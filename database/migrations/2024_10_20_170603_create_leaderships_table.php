<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
{
    Schema::create('leaderships', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('position');
        $table->text('bio')->nullable();
        $table->text('message')->nullable(); // for roles that have a message, like the Headmaster
        $table->string('image')->nullable(); // store the path to the image
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
        Schema::dropIfExists('leaderships');
    }
}
