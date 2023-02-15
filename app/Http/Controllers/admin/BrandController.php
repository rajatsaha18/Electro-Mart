<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    private $brands;
    private $brand;
    public function index()
    {
        return view('admin.brand.index');
    }

    public function create(Request $request)
    {
        Brand::newBrand($request);
        return redirect('/manage-brand')->with('message', 'Brand create successfully');
    }

    public function manage()
    {
        $this->brands = Brand::all();
        return view('admin.brand.manage', ['brands' => $this->brands ]);
    }

    public function edit($id)
    {
        $this->brand = Brand::find($id);
        return view('admin.brand.edit',['brand' => $this->brand]);
    }

    public function update(Request $request,$id)
    {
        Brand::updateBrand($request, $id);
        return redirect('/manage-brand')->with('message', 'Brand update successfully');
    }
    public function delete($id)
    {
        Brand::deleteBrand($id);
        return redirect('/manage-brand')->with('message', 'Brand delete successfully');
    }
}
