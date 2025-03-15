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
    Schema::create('alimentos', function (Blueprint $table) {
      $table->id();
      $table->string('nombre')->nullable(false)->comment('Nombre del alimento');
      $table->string('calorias')->nullable(false)->comment('Calorias del alimento');
      $table->string('descripcion')->nullable(true);
      $table->boolean('estado')->default(true);
      $table->foreignId('id_categoria')->constrained('categorias')->onDelete('cascade')->onUpdate('cascade');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('alimentos');
  }
};
