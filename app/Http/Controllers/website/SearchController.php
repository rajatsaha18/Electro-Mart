<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    private $products;
    public function index(Request $request, $id)
    {
        $this->products = new Product();
        $this->products->category_id = $id;
        $this->products->name = $request->name;
        $this->products->save();
        return redirect('/product-detail');
    }
}
