<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('works')->insert([
            'title' => Str::random(10),
            'content' => Str::random(50),
            'gitUrl' => Str::random(50),
            'siteUrl' => Str::random(50),
        ]);
    }
}
