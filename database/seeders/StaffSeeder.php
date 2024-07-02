<?php

namespace Database\Seeders;

use App\Models\Staff;
use App\Models\Staffs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Staffs::create(['nama' => 'John Doe']);
        Staffs::create(['nama' => 'Jane Smith']);
        Staffs::create(['nama' => 'Robert Brown']);
    }
}
