<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Alternative::select("*")->get();
        return view('product', [
            'tittle' => 'List Kost',
            'product' => $product
        ]);
        
        // dd($product);
    }
}
