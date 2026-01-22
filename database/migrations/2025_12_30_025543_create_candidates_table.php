<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('parti_id');

            $table->text('name')->nullable();
            $table->text('photo')->nullable();
            $table->text('position')->nullable();
            $table->text('region')->nullable();
            $table->integer('age')->nullable(); // Cambié de unsignedBigInteger a integer
            $table->text('profession')->nullable();
            $table->text('education')->nullable();
            $table->text('experience')->nullable();
            $table->text('biography')->nullable();
            $table->text('cv_url')->nullable();
            $table->text('plan_gobierno_url')->nullable();
            $table->text('audio_url')->nullable();
            $table->text('video_url')->nullable();

            $table->boolean('is_promoted')->nullable();

            $table->json('social_links')->nullable();
            $table->json('proposals')->nullable();

            $table->timestamp('created_at')->nullable();

            $table->foreign('party_id')
                ->references('id')
                ->on('parties')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};