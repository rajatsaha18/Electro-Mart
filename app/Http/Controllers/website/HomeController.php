<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $product;
    private $products;
    private $searching;
    public function index()
    {
        $this->products = Product::orderBy('id', 'desc')->take(6)->get();
        return view('website.home.home', [
            'products' => $this->products
        ]);
    }
    public function searchProduct(Request $request)
    {
        if($request->ajax()){
            $data = Product::where('name','LIKE',$request->name.'%')->get();
            $output = '';
            if(count($data ) > 0)
            {
                $output = '<ul class="list-group" style="display:block; position:relative;z-index:1">';
                foreach($data as $row)
                {
                    $output .= '<li class="list-group-item">'.$row->name.'</li>';
                }
                $output .= '</ul>';

            }else{
                $output .= '<li class="list-group-item">No Data Found</li>';
            }
            return $output;
        }
        return view('website.home.home');
        // $this->searching = $_GET['search'];
        // $products = Product::where('name' .'LIKE'.'%'. $this->searching.'%')->get();
        // return view('website.home.home', ['products' => $products]);
    }

    public function about($id)
    {
        $this->products = Product::where('category_id', $id)->orderBy('id', 'desc')->get();
        return view('website.about.about',['products' => $this->products]);
    }

    public function detail($id)
    {
        $this->product = Product::find($id);
        return view('website.detail.detail', ['product' => $this->product]);
    }


}
