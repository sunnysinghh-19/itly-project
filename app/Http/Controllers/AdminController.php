<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Inquiry;

class AdminController extends Controller
{

    public function index()
    {

        $products = Product::latest()->get();

        $leads = Inquiry::latest()->get();

        return view(
            'admin',
            compact('products', 'leads')
        );

    }

}
