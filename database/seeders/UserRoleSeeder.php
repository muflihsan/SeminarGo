<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $role = DB::table('role')->select('idRole')->first();
        $user = DB::table('user')->select('idUsers')->first();

        DB::table('user_role')->insert([
            'id' => Str::uuid(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'idroleuser' => $role->idRole,
            'idUser' => $user->idUsers,
        ]);
    }
}
