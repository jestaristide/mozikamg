<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musiques', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique()->index();
            $table->string('slug')->unique()->index();
            $table->string('description')->nullable();
            $table->string('content')->nullable();
            $table->string('tag')->nullable();
            $table->string('category')->nullable();
            $table->string('author')->nullable();
            $table->string('compositor')->nullable();
            $table->string('studio')->nullable();
            $table->string('cover_link')->nullable();
            $table->string('jacket_link')->nullable();
            $table->string('yt_link')->nullable();
            $table->string('audio_link')->nullable();
            $table->string('360p_link')->nullable();
            $table->string('480p_link')->nullable();
            $table->string('720p_link')->nullable();
            $table->string('1080p_link')->nullable();
            $table->string('4k_link')->nullable();
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
        Schema::dropIfExists('musiques');
    }
}
