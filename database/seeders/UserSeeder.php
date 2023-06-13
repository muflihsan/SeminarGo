<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //DB::table('user')->truncate();
        DB::table('user')->insert([
            'idUsers' => Str::uuid(),
            'namaLengkapUser' => 'Agung Prayoga',
            'userName' => 'agung',
            'emailUser' => 'agung23@gmail.com',
            'password' => bcrypt('agunggans23'),
            'noIdentitas' => '3310172512030001',
            'noTelp' => '081122223333',
            'jenisKelamin' => 'Pria',
            'asalInstansi' => 'Universitas Nusantara Jaya',
            'RiwayatSeminar' => 'SEMANTIK UPT TIK 2023',
        ]);
    }
}
