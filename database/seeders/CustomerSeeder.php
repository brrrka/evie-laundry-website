<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create(['nama_customer' => 'Jane Doe', 'alamat' => 'Jl. Anggur']);
        Customer::create(['nama_customer' => 'Michael Doe', 'alamat' => 'Jl. Nangka']);
    }
}