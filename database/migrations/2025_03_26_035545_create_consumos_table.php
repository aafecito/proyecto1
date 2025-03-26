<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('consumos', function (Blueprint $table) {
      $table->id();
      $table->timestamp('fechaConsumo')->default(DB::raw('CURRENT_TIMESTAMP'));
      $table->decimal('cantidad', 5, 2)->default(1);
      $table->foreignId('id_alimento')->constrained('alimentos')->onDelete('cascade')->onUpdate('cascade');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('consumos');
  }
};
