<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    public function index()
    {
        // echo '2';
        $products = \DB::table('products')->select('*')->get();
        return view('shopping', ['products' => $products]);
    }

    public function buyingProduct(Request $request)
    {   
        $id_product = $request->input('product');
        $id_user = $request->input('user') || 1;
        $shopping = \DB::table('shopping')->insert([
            'id_producto' => $id_product,
            'id_user' => $id_user
        ]);

        if ($shopping)
        {
            $products = \DB::table('products')->select('*')->get();
            return redirect('shopping')->with('products', $products);
        }
    }
}
