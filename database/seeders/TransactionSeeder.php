<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('transactions')->insert([
            [
                'appuser_id' => 1,
                'transaction_date' => '2023-03-21',
                'coffee_id' => 5,
            ],
            [
                'appuser_id' => 1,
                'transaction_date' => '2023-03-20',
                'coffee_id' => 1,
            ],
            [
                'appuser_id' => 1,
                'transaction_date' => '2023-03-19',
                'coffee_id' => 4,
            ],
            [
                'appuser_id' => 2,
                'transaction_date' => '2023-03-21',
                'coffee_id' => 10,
            ],
            [
                'appuser_id' => 2,
                'transaction_date' => '2023-03-19',
                'coffee_id' => 6,
            ],
            [
                'appuser_id' => 2,
                'transaction_date' => '2023-03-18',
                'coffee_id' => 4,
            ],
        ]);
    }
}
