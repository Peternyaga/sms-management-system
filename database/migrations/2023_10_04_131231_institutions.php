<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('institution_code');
            $table->string('institution_name');
            $table->integer('county_id');
            $table->integer('sub_county_id');
            $table->integer('division_id');
            $table->integer('zone_id');
            $table->integer('institution_type_id');
            $table->timestamps();

            $table->foreign('county_id')->references('id')->on('counties');
            $table->foreign('sub_county_id')->references('id')->on('sub_counties');
            $table->foreign('division_id')->references('id')->on('divisions');
            $table->foreign('zone_id')->references('id')->on('zones');
            $table->foreign('institution_type_id')->references('id')->on('institution_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
