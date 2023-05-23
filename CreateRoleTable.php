<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleTable extends Migration {
    @return void

    public function up() {
        Schema::create('Role', function(Blueprint $table) {
            $table->uuid("idRole")->primary();
            $table->string("namaRole");
        });
    }
    
    @return void
    public function down() {
        Schema::dropIfExists('role');
    }
}