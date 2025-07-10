<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('sites')->insert([
            ['name' => 'HQ'],
            ['name' => 'Warehouse'],
            ['name' => 'Plant 1'],
            ['name' => 'Plant 2'],
            ['name' => 'Remote Office'],
        ]);
    }
}
