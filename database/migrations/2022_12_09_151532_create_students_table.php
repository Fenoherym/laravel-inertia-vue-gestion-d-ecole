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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('numInscription');
            $table->string('first_name');
            $table->date('birthday');
            $table->string('adresse')->nullable();
            $table->string('tel')->nullable();
            $table->string('email')->nullable();
            $table->string('photo')->nullable();
            $table->foreignId('level_id')->constrained();
            $table->foreignId('school_year_id')->constrained()->onDelete('cascade');
            $table->unique(['numInscription', 'school_year_id']);
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
        Schema::dropIfExists('students');
    }
};
