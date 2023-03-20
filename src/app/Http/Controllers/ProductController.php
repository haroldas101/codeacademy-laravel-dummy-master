<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function __construct()
    {
    }

    public function index()
    {
        try {
        $products = file_get_contents(storage_path() . '/app/public/example-products.json');
        $products = json_decode($products, true)['data'];
        } catch (\Throwable $th) {
            $products = null;
        }
        return view('products.index', [
            'products' => $products
        ]);
    }
}
