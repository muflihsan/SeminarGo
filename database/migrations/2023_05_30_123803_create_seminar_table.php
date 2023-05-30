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
        Schema::create('seminar', function (Blueprint $table) {
            $table->uuid("id")->primary()->unique();
			$table->string("namaseminar")->nullable();
			$table->string("judulseminar")->nullable();
			$table->date("tanggalseminar")->nullable();
			$table->date("waktuseminar")->nullable();
			$table->string("tempatseminar")->nullable();
			$table->date("pelaksanaanseminar")->nullable();
			$table->enum("isPaid", ["gratis", "bayar"]);
			$table->integer("hargatiket")->nullable();
			$table->binary("templatesertifikat")->nullable();
			$table->uuid("idpembicara")->nullable();
			$table->date("openpendaftaranseminar")->nullable();
			$table->date("closependaftaranseminar")->nullable();
			$table->binary("startdownload");
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seminar');
    }
};
