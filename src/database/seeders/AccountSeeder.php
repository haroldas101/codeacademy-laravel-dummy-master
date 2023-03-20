<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Sequence;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accounts = Account::factory(10)->create();
        

        Transaction::factory(10)->state(new Sequence(
            [
                'account_id' => $accounts[1]->id
            ],
            [
                'account_id' => $accounts[2]->id
            ],
            [
                'account_id' => $accounts[3]->id
            ]
        ))->create();

        
    }
}
