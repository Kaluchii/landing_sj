<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \Illuminate\Support\Facades\DB::table('users')->insert([
            'name' => 'Viktor',
            'email' => 'info@interpro.kz',
            'password' => bcrypt('interpro.kz'),
        ]);
        \Illuminate\Support\Facades\DB::table('users')->insert([
            'name' => 'summerjam',
            'email' => 'info@summerjam.kz',
            'password' => bcrypt('7jam2Pqu4B'),
        ]);
    }
}
