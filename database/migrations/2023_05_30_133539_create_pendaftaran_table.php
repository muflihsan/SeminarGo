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
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->uuid("id")->primary()->unique();
            $table->binary("paymentproof");
            $table->uuid("idUsers");
            $table->uuid("idseminar");
			$table->foreign("idUsers")->references('idUsers')->on('user');
			$table->foreign("idseminar")->references('id')->on('seminar');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran');
    }
};
