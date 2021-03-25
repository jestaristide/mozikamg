<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artistes', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('artist_name');
            $table->string('slug')->unique();
            $table->string('birthdate')->nullable();
            $table->string('birtplace')->nullable();
            $table->text('description')->nullable();
            $table->string('tag')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('tel')->nullable();
            $table->string('profil_link')->nullable();
            $table->string('cover_link')->nullable();
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
        Schema::dropIfExists('artistes');
    }
}
