<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(/**
         * @param Blueprint $table
         */
            'visits', function (Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->string('license_plate', 10); // Maximum length I could find in U.S. was 8 so we'll just say 10
            $table->string('vehicle', 5); // Maximum length is 5 for "truck"
            $table->boolean('bed_down')->nullable();
            $table->boolean('muddy_bed')->nullable();
            $table->boolean('returning_customer')->nullable();
            $table->boolean('2nd_visit')->nullable();
            $table->decimal('total', 4, 2)->nullable();
            $table->boolean('paid')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visits');
    }
}
