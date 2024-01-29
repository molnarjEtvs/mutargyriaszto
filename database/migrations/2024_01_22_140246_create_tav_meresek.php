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
        Schema::create('tav_meresek', function (Blueprint $table) {
            $table->id("t_id");
            $table->integer("cm");
            $table->tinyInteger("riasztas");
            $table->dateTime("rogzitesi_ido");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tav_meresek');
    }
};
