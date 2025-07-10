<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisitorCompanySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('visitor_companies')->insert([
            ['name' => 'ABC Logistics Sdn Bhd'],
            ['name' => 'XYZ Engineering'],
            ['name' => 'Global Tech Solutions'],
            ['name' => 'Mega Supplies'],
            ['name' => 'Sunrise Trading Co.'],
        ]);
    }
}
