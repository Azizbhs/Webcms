<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee; // Add this line to import the Employee class

class EmployeeSeeder extends Seeder
{
    public function run()
    {
        Employee::factory()->count(10)->create();
    }
}