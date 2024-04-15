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
        Schema::create('animes', function (Blueprint $table) {
            $table->id("anime_id");
            $table->string("nombre", 100);
            $table->string("descripcion", 100);
            $table->text("personajes");
            $table->date("fechapublicacion")->nullable();
            $table->integer("capitulos");
            $table->string("estado", 20);
            $table->double("calificacion");
            $table->string("autor");
            $table->string("estudioproduccion");
            $table->string("enlace");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animes');
    }
};
