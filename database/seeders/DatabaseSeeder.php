<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Person;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
            // User::factory(50)->create();
            Person::factory(10)->create();
    }
}
