<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranTable extends Migration {
	public function up(){
		Schema::create_function('pendaftaran', function (Blueprint $table){
			$tabel->uuid("id")->primary()->unique();
			$tabel->foreign("idpengguna")->references('id')->on('user');
			$tabel->foreign("idseminar")->references('id')->on('seminar');
			$tabel->binary("paymentproof");
		});
	}
	public function down(){
		Schema::dropIfExists('seminar');
	}
}