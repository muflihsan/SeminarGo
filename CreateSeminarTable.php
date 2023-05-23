<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeminarTable extends Migration {
	public function up(){
		Schema::create_function('seminar', function (Blueprint $table){
			$tabel->uuid("id")->primary()->unique();
			$tabel->string("namaseminar")->nullable();
			$tabel->string("judulseminar")->nullable();
			$tabel->date("tanggalseminar")->nullable();
			$tabel->date("waktuseminar")->nullable();
			$tabel->string("tempatseminar")->nullable();
			$tabel->date("pelaksanaanseminar")->nullable();
			$tabel->enum("isPaid", ["gratis", "bayar"]);
			$tabel->integer("hargatiket")->nullable();
			$tabel->binary("templatesertifikat")->nullable();
			$tabel->uuid("idpembicara")->nullable();
			$tabel->date("openpendaftaranseminar")->nullable();
			$tabel->date("closependaftaranseminar")->nullable();
			$tabel->binary("startdownload");
		});
	}
	public function down(){
		Schema::dropIfExists('seminar');
	}
}