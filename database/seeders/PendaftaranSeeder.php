<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = DB::table('user')->select('idUsers')->first();
        $seminar = DB::table('seminar')->select('id')->first();

        DB::table('pendaftaran')->insert([
            'id' => Str::uuid(),
            'paymentproof' => 'washingtonDC.pdf',
            'idUsers' => $user->idUsers,
            'idseminar' => $seminar->id,
            'paymentdate' => "2023-06-03",
        ]);
    }
}
