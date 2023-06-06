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
        Schema::create('pembicara', function (Blueprint $table) {
            $table->uuid("idPembicara");
            $table->string("namaPembicara");
            $table->string("asalPembicara");

            $table->foreign("idPembicara")->references("idpembicara")->on("seminar");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembicara');
    }
};
