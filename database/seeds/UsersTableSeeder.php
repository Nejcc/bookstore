<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::truncate();

        DB::table('users')->insert([
            'name'         => 'nejc',
            'email'        => 'nejc@test.net',
            'password'     => bcrypt('secret'),
        ]);
    }
}
