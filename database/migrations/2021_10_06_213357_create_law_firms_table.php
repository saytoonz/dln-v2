<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLawFirmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('law_firms', function (Blueprint $table) {
            $table->id();
            $table->string('law_firm');
            $table->string('image');
            $table->string('lawyer');
            $table->longText('about');
            $table->string('year_of_call');
            $table->string('position');
            $table->string('slug');
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
        Schema::dropIfExists('law_firms');
    }
}
