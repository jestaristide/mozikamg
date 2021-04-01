<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusiquesArtistes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artiste_musique', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('musique_id')->index();
            $table->unsignedBigInteger('artiste_id')->index();

            $table->foreign('artiste_id')->on('artistes')->references('id')->onDelete('cascade');
            $table->foreign('musique_id')->on('musiques')->references('id')->onDelete('cascade');
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
        Schema::dropIfExists('artiste_musique');
    }
}
