<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{

    function __construct()
    {
    }

    public function index()
    {
        try {
            $orders = file_get_contents(storage_path() . '/app/public/example-orders.json');
            $orders = json_decode($orders, true)['data'];
            } catch (\Throwable $th) {
                $orders = null;
            }
            return view('orders.index', [
                'orders' => $orders
            ]);
    }
}
