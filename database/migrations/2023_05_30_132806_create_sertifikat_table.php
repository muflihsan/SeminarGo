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
        Schema::create('sertifikat', function (Blueprint $table) {
            $table->uuid("idSertifikat")->primary();
            $table->uuid("idSeminar");
            $table->uuid("idUsers");
            $table->binary("sertifikatFile");

            $table->foreign("idSeminar")->references("id")->on("seminar");
            $table->foreign("idUsers")->references("idUsers")->on("user");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sertifikat');
    }
};
