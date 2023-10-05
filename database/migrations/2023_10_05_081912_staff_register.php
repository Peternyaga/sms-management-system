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
        Schema::create('staff_register', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('tsc_no');
            $table->bigInteger('id_no');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('surname');
            $table->string('date_of_birth');
            $table->string('gender');
            $table->integer('mobile');
            $table->string('email');
            $table->integer('role_id');
            $table->integer('disability_id');
            $table->integer('institution_id');
            $table->timestamps();

            $table->foreign('disability_id')->references('disability_code')->on('disability_types');
            $table->foreign('role_id')->references('role_code')->on('roles');
            $table->foreign('institution_id')->references('institution_type_code')->on('institution_types');
        });    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
