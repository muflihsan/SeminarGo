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
        Schema::create('user_role', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->timestamps();
            $table->uuid("idroleuser");
            $table->uuid("idUser");

            $table->foreign("idroleuser")->references("idRole")->on("role");
            $table->foreign("idUser")->references("idUsers")->on("user");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_role');
    }
};
