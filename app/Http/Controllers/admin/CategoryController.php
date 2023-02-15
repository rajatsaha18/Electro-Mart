<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categories;
    private $category;
    public function index()
    {
        return view('admin.category.index');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',

        ]);
        $this->categories = Category::newCategory($request);
        return redirect('/manage-category')->with('message', 'Category create successfully');

    }

    public function manage()
    {
        $this->categories = Category::all();
        return view('admin.category.manage', ['categories' => $this->categories]);
    }

    public function edit($id)
    {
        $this->category = Category::find($id);
        return view('admin.category.edit', ['category' => $this->category ]);
    }

    public function update(Request $request, $id)
    {
        $this->category = Category::updateCategory($request, $id);
        return redirect('/manage-category')->with('message', 'Category Update Successfully');
    }

    public function delete($id)
    {
        $this->category = Category::deleteCategory($id);
        return redirect('/manage-category')->with('message', 'Category Delete Successfully');
    }


}
