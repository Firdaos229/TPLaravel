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
        Schema::create('marches', function (Blueprint $table) {
            $table->id('idMarche');
            $table->unsignedBigInteger('ville_id');
            $table->unsignedBigInteger('emplacement_id')->nullable();
            $table->string('nomMarche');
            $table->text('description');
            $table->integer('capacite');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('image')->nullable();
            $table->foreign('ville_id')->references('idVille')->on('villes');
            $table->foreign('emplacement_id')->references('idEmplacement')->on('emplacements');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marchers');
    }
};
