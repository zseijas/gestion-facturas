<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    public function index()
    {
        $products = \DB::table('products')->select('*')->get();
        return view('shopping', ['products' => $products]);
    }

    public function buyingProduct(Request $request)
    {   
        $shopping = DB::table('shopping')->insert([
            'id_producto' => $request->id_producto,
            'id_user' => $request->id_user
        ]);

        if ($shopping)
        {
            $this->index();
        }
    }
}
