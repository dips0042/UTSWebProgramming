<?php

namespace Database\Seeders;

use App\Models\AppUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\SUpport\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('app_users')->insert([
            [
                'name' => 'Mr. Vico Lomar',
                'stars' => 60,
                'loyalty' => 'Gold',
            ],
            [
                'name' => 'Ms. Fei Fei Li',
                'stars' => 107,
                'loyalty' => 'Green',
            ],
        ]);
    }
}
