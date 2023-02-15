<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    private $categories;
    private $subCategories;
    private $subCategory;
    public function index()
    {
        $this->categories = Category::all();
        return view('admin.subCategory.index', ['categories' => $this->categories]);
    }

    public function create(Request $request)
    {
        $this->subCategories = SubCategory::newSubCategory($request);
        return redirect('/manage-sub-category')->with('message', 'subcategory create successfully');
    }

    public function manage()
    {
        $this->subCategories = SubCategory::all();
        return view('admin.subCategory.manage',['subCategories' => $this->subCategories]);
    }

    public function edit($id)
    {
        $this->subCategory = SubCategory::find($id);
        $this->categories = Category::all();
        return view('admin.subCategory.edit',[
            'subCategory' => $this->subCategory,
            'categories' => $this->categories
        ]);
    }

    public function update(Request $request,$id)
    {
        SubCategory::updateSubCategory($request, $id);
        return redirect('/manage-sub-category')->with('message', 'SubCategory Update Successfully');
    }

    public function delete($id)
    {
        SubCategory::deleteSubCategory($id);
        return redirect('/manage-sub-category')->with('message', 'SubCategory delete Successfully');

    }
}
