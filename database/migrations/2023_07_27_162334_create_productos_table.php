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
        Schema::create('productos', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('nombre',150)->nullable();
            $table->string('referencia',150)->nullable();
            $table->integer('precio')->nullable();
            $table->integer('peso')->nullable();
            $table->string('categoria')->nullable();
            $table->integer('stock')->nullable();
            $table->date('fechaCreacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
