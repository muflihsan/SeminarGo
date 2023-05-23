<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSertifikatTable extends Migration {
    @return void

    public function up() {
        Schema::create('sertifikat', function(Blueprint $table) {
            $table->uuid("idSertifikat")->primary();
            $table->uuid("idSeminar");
            $table->uuid("idUsers");
            $table->binary("sertifikatFile");

            $table->foreign("idSeminar")->references("idSeminar")->on("seminar");
            $table->foreign("idUsers")->references("idUsers")->on("users");
        });
    }
    
    @return void
    public function down() {
        Schema::dropIfExists('sertifikat');
    }
}