<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use app\Models\Work;

class WorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Work::class, 3)->create();
    }
}
