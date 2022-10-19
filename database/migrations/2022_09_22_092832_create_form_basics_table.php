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
        Schema::create('form_basics', function (Blueprint $table) {
            $table->id();
            $table->string('empname')->nullable();
            $table->string('phone')->nullable();
            $table->string('expense')->nullable();
            $table->string('amount')->nullable();
            $table->string('currency')->nullable();
            $table->string('empid')->nullable();
            $table->string('date')->nullable();
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
        Schema::dropIfExists('form_basics');
    }
};
