<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SeminarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pembicara = DB::table('pembicara')->select('idPembicara')->first();

        DB::table('seminar')->insert([
            'id' => Str::uuid(),
            'namaseminar' => 'SEMANTIK UPT TIK 2023',
            'judulseminar' => 'AI : Bekali Diri Hadapi Era Otomasi',
            'idPembicara' => $pembicara->idPembicara,
            'tanggalseminar' => '2023-06-10',
            'waktuseminar' => '08:00:00',
            'tempatseminar' => 'Aula Gedung C UNS',
            'pelaksanaanseminar' => 'Offline',
            'isPaid' => 'gratis',
            'hargatiket' => 0,
            'templatesertifikat' => 'washingtonDC.pdf',
            'openpendaftaranseminar' => '2023-06-02',
            'closependaftaranseminar' => '2023-06-05',
            'startdownload' => 'washingtonDC.pdf',
        ]);
    }
}
