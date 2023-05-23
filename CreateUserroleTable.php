<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserroleTable extends Migration {
    @return void

    public function up() {
        Schema::create('userRole', function(Blueprint $table) {
            $table->uuid("idUserRole")->primary();
            $table->uuid("idUsers");
            $table->uuid("idRole");

            $table->foreign("idUsers")->references("idUsers")->on("users");
            $table->foreign("idRole")->references("idRole")->on("role");
        });
    }
    
    @return void
    public function down() {
        Schema::dropIfExists('userRole');
    }
}