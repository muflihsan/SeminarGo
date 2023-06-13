<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SertifikatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seminar = DB::table('seminar')->select('id')->first();
        $user = DB::table('user')->select('idUsers')->first();

        DB::table('sertifikat')->insert([
            'idSertifikat' => Str::uuid(),
            'idseminar' => $seminar->id,
            'idUsers' => $user->idUsers,
            'sertifikatFile' => 'washingtonDC.pdf'
        ]);
    }
}