<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert([
            'name'=>'hashimoto',
            'mail'=>'lalala_s@icloud.com',
        ]);

        DB::table('people')->insert([
            'name'=>'taku',
            'mail'=>'taku@icloud.com',
        ]);

        DB::table('people')->insert([
            'name'=>'ya',
            'mail'=>'ya@icloud.com',
        ]);
    }
}
