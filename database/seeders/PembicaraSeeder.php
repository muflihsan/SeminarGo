<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PembicaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('pembicara')->insert([
            'idPembicara' => Str::uuid(),
            'namaPembicara' => 'Agus Suprapto',
            'asalPembicara' => 'Magelang',
        ]);
    }
}
