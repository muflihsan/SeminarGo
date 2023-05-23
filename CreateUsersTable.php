<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {
    @return void

    public function up() {
        Schema::create('users', function(Blueprint $table) {
            $table->uuid("idUsers")->primary();
            $table->string("namaLengkapUser");
            $table->string("userName");
            $table->string("emailUser");
            $table->string("password");
            $table->integer("noIdentitas");
            $table->integer("noTelp");
            $table->boolean("jenisKelamin");
            $table->string("asalInstansi");
            $table->string("RiwayatSeminar");
        });
    }
    
    @return void
    public function down() {
        Schema::dropIfExists('users');
    }
}