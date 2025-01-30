<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use App\Models\Todo; // After adding this use, we can remove something in the function run() : "'\App\Models\'Todo::factory(15)->create();"
class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Todo::factory(15)->create();
    }
}
