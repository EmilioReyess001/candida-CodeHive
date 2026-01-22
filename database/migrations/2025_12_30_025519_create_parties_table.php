<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('parties', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name');
            $table->string('acronym')->nullable();
            $table->string('logo')->nullable();
            $table->string('color')->nullable();
            $table->string('slogan')->nullable();
            $table->string('description')->nullable();
            $table->string('founded')->nullable();
            $table->string('ideology')->nullable();
            $table->string('president_name')->nullable();
            $table->string('president')->nullable();

            $table->timestamp('created_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('parties');
    }
};
