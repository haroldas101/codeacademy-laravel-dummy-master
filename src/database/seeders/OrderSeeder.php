<?php

namespace Database\Seeders;

use App\Models\Status;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Account;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::factory(5)->create();
        $accounts = Account::factory(5)->create();
        $statuses = Status::factory(5)->create();
        $carts = Cart::factory(5)->state(new Sequence(
            [
                'product_id' => $products[0]->id,
                'account_id' => $accounts[0]->id,
                'amount' => fake()->randomNumber(2),
            ],
            [
                'product_id' => $products[1]->id,
                'account_id' => $accounts[1]->id,
                'amount' => fake()->randomNumber(2),
            ],
            [
                'product_id' => $products[2]->id,
                'account_id' => $accounts[2]->id,
                'amount' => fake()->randomNumber(2),
            ],
        ))->create();

        Order::factory(5)->state(new Sequence(
            [
                'account_id' => $accounts[0]->id,
                'cart_id' => $carts[0]->id,
                'status_id' => $statuses[0]->id,
                'date' => fake()->date(),
            ],
            [
                'account_id' => $accounts[1]->id,
                'cart_id' => $carts[1]->id,
                'status_id' => $statuses[1]->id,
                'date' => fake()->date(),
            ],
            [
                'account_id' => $accounts[2]->id,
                'cart_id' => $carts[2]->id,
                'status_id' => $statuses[2]->id,
                'date' => fake()->date(),
            ],
        ))->create();
    }
}
