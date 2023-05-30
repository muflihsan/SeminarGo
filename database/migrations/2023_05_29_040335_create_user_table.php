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
        Schema::create('user', function (Blueprint $table) {
            $table->uuid("idUsers")->primary()->required;
            $table->string("namaLengkapUser")->required;
            $table->string("userName")->required;
            $table->string("emailUser")->required;
            $table->string("password")->required;
            $table->integer("noIdentitas");
            $table->integer("noTelp");
            $table->boolean("jenisKelamin");
            $table->string("asalInstansi");
            $table->string("RiwayatSeminar");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
