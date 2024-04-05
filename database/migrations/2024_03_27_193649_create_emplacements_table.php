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
        Schema::create('emplacements', function (Blueprint $table) {
            $table->id('idEmplacement');
            $table->unsignedBigInteger('type_emplacement_id');
            $table->string('numero');
            $table->foreign('type_emplacement_id')->references('idType')->on('type_emplacements');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emplacements');
    }
};
