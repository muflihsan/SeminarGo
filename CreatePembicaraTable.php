<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembicaraTable extends Migration {
    @return void

    public function up() {
        Schema::create('pembicara', function(Blueprint $table) {
            $table->uuid("idPembicara")->primary();
            $table->string("namaPembicara");
            $table->string("asalPembicara");
        });
    }
    
    @return void
    public function down() {
        Schema::dropIfExists('pembicara');
    }
}