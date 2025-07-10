<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PurposeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('purposes')->insert([
            ['name' => 'Delivery'],
            ['name' => 'Meeting'],
            ['name' => 'Maintenance'],
            ['name' => 'Audit'],
            ['name' => 'Inspection'],
        ]);
    }
}
