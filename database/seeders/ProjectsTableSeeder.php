<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
           ['name'=>'e-sportsly.com', 'team_id' => 1,],
           ['name'=>'nomadicsoft.io', 'team_id' => 1,],
           ['name'=>'getproperty.ae', 'team_id' => 1,],
        ]);
    }
}
