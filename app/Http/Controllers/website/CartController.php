<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    private $product;
    public function index(Request $request,$id)
    {
        $this->product = Product::find($id);
        Cart::add([
            'id' => $this->product->id,
            'name' => $this->product->name,
            'price' => $this->product->selling_price,
            'quantity' => $request->qty,
            'attributes' => [
                'image' => $this->product->image,
            ],
        ]);
        return redirect('/show-cart');
    }

    public function show()
    {
        return view('website.cart.show',['products' => Cart::getContent()]);

    }

    public function update(Request $request, $id)
    {
        Cart::update($id, [
            'quantity' => [
                'relative'  => false,
                'value'     => $request->qty,
            ]
        ]);
        return redirect()->back()->with('message', 'Cart Product Update Successfully');
    }

    public function remove($id)
    {
        Cart::remove($id);
        return redirect()->back()->with('message','cart remove successfully');
    }
}
