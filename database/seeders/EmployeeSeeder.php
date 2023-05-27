<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            'first_name' => Str::random(6),
            'last_name' => Str::random(8),
            'email' => Str::random(7).'@gmail.com',
            'phone' => rand(1111111111,99999999999),
            'company_id' => 1,
        ]);
    }
}
