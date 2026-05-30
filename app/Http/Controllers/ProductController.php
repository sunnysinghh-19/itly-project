<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | HOMEPAGE
    |--------------------------------------------------------------------------
    */

    public function home()
    {

        $products = Product::latest()->take(8)->get();

        return view('welcome', compact('products'));

    }

    /*
    |--------------------------------------------------------------------------
    | PRODUCTS PAGE
    |--------------------------------------------------------------------------
    */

    public function products()
    {

        $products = Product::latest()->get();

        return view('products', compact('products'));

    }

    /*
    |--------------------------------------------------------------------------
    | PRODUCT DETAIL PAGE
    |--------------------------------------------------------------------------
    */

    public function show($id)
    {

        $product = Product::findOrFail($id);

        return view('product-detail', compact('product'));

    }

    /*
    |--------------------------------------------------------------------------
    | DELETE PRODUCT
    |--------------------------------------------------------------------------
    */

    public function delete($id)
    {

        $product = Product::findOrFail($id);

        $product->delete();

        return back();

    }

    /*
    |--------------------------------------------------------------------------
    | EDIT PRODUCT PAGE
    |--------------------------------------------------------------------------
    */

    public function edit($id)
    {

        $product = Product::findOrFail($id);

        return view('edit-product', compact('product'));

    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE PRODUCT
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, $id)
    {

        $product = Product::findOrFail($id);

        /*
        |--------------------------------------------------------------------------
        | IMAGE UPLOAD
        |--------------------------------------------------------------------------
        */

        if($request->hasFile('image')){

            $imageName =
            time().'.'.$request->image->extension();

            $request->image->move(
                public_path('uploads'),
                $imageName
            );

            $imagePath = '/uploads/'.$imageName;

        }
        else{

            $imagePath = $product->image;

        }

        /*
        |--------------------------------------------------------------------------
        | UPDATE DATABASE
        |--------------------------------------------------------------------------
        */

        $product->update([

            'product_name' => $request->product_name,

            'brand' => $request->brand,

            'category' => $request->category,

            'specs' => $request->specs,

            'price' => $request->price,

            'image' => $imagePath,

        ]);

        return redirect('/itly-admin-panel');

    }

    public function store(Request $request)
    {

    /*
    |--------------------------------------------------------------------------
    | IMAGE UPLOAD
    |--------------------------------------------------------------------------
    */

    $imageName =
    time().'.'.$request->image->extension();

    $request->image->move(
        public_path('uploads'),
        $imageName
    );

    /*
    |--------------------------------------------------------------------------
    | SAVE PRODUCT
    |--------------------------------------------------------------------------
    */

    Product::create([

        'product_name' => $request->product_name,

        'brand' => $request->brand,

        'category' => $request->category,

        'specs' => $request->specs,

        'price' => $request->price,

        'image' => '/uploads/'.$imageName,

    ]);

    return redirect('/itly-admin-panel');
    }
}
