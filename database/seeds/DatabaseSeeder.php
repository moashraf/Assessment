<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    $this->call(\EmployeesTableSeeder::class);
    $this->call(\comp_TableSeeder::class);
    $this->call(\adminTableSeeder::class);
    }
}
