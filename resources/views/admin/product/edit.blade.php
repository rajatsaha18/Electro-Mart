@extends('admin.master')

@section('title')
    Admin | Edit Product
@endsection

@section('body')
<h4 class="text-center text-success">{{ Session::get('message') }}</h4>
    <h3 class="text-center">Edit Product Form</h3>
    <div class="tab-content mb-5">
        <div class="tab-pane active" id="horizontal-form">
            <form class="form-horizontal" action="{{ route('product.update',['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Category Name</label>
                    <div class="col-sm-8">
                        <select name="category_id" class="form-control1" required onchange="getSubCategory(this.value)">
                            <option value="" disabled selected>--Category Name--</option>
                            @foreach ($categories as $category )
                            <option value="{{ $category->id }}" {{ $category->id == $product->category->id ? 'selected' : ''}}>{{ $category->name }}</option>
                            @endforeach

                        </select>
                        <span class="text-danger">{{ $errors->has('category_id') ? $errors->first('category_id') : '' }}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">SubCategory Name</label>
                    <div class="col-sm-8">
                        <select name="subcategory_id" class="form-control1" required id="subCategoryId">
                            <option value="" disabled selected>--SubCategory Name--</option>
                            @foreach ($subCategories as $subCategory )
                            <option value="{{ $subCategory->id }}" {{ $subCategory->id == $product->subcategory->id ? 'selected' : '' }}>{{ $subCategory->name }}</option>
                            @endforeach

                        </select>
                        <span class="text-danger">{{ $errors->has('subcategory_id') ? $errors->first('subcategory_id') : '' }}</span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Brand Name</label>
                    <div class="col-sm-8">
                        <select name="brand_id" class="form-control1" required>
                            <option value="" disabled selected>--Brand Name--</option>
                            @foreach ($brands as $brand )
                            <option value="{{ $brand->id }}" {{ $brand->id == $product->brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
                            @endforeach

                        </select>
                        <span class="text-danger">{{ $errors->has('brand_id') ? $errors->first('brand_id') : '' }}</span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Unit Name</label>
                    <div class="col-sm-8">
                        <select name="unit_id" class="form-control1" required>
                            <option value="" disabled selected>--Unit Name--</option>
                            @foreach ($units as $unit )
                            <option value="{{ $unit->id }}" {{ $unit->id == $product->unit->id ? 'selected' : '' }}>{{ $unit->name }}</option>
                            @endforeach

                        </select>
                        <span class="text-danger">{{ $errors->has('unit_id') ? $errors->first('unit_id') : '' }}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Product Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" value="{{ $product->name }}" name="name" placeholder="Enter Product Name">
                        <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Product Code</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" value="{{ $product->code }}" name="code" placeholder="Enter Product Code">
                        <span class="text-danger">{{$errors->has('code') ? $errors->first('code') : ''}}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Product Regular Price</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" value="{{ $product->regular_price }}" name="regular_price" placeholder="Enter Regular Price">
                        <span class="text-danger">{{$errors->has('regular_price') ? $errors->first('regular_price') : ''}}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Product Selling Price</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" value="{{ $product->selling_price }}" name="selling_price" placeholder="Enter Selling Price">
                        <span class="text-danger">{{$errors->has('selling_price') ? $errors->first('selling_price') : ''}}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Product Stock Amount</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" value="{{ $product->stock_amount }}" name="stock_amount" placeholder="Enter Stock Amount">
                        <span class="text-danger">{{$errors->has('stock_amount') ? $errors->first('stock_amount') : ''}}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Product Short Description</label>
                    <div class="col-sm-8">
                        <textarea class="form-control1" name="short_description" placeholder="Description here">{{ $product->short_description }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Product Long Description</label>
                    <div class="col-sm-8">
                        <textarea class="form-control1 summernote"  name="long_description" placeholder="Description here">{{ $product->long_description }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Product Image</label>
                    <div class="col-sm-8">
                        <input type="file" class="form-control-file" name="image" accept="image/*"/>
                        <img src="{{ asset($product->image) }}" alt="" height="70" width="55"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Product SubImage</label>
                    <div class="col-sm-8">
                        <input type="file" class="form-control-file" name="sub_image[]" accept="image/*" multiple/>
                        @foreach ($product->subImages as $subImage )
                        <img src="{{ asset($subImage->image) }}" alt="" height="70" width="55"/>
                        @endforeach
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Publication Status</label>
                    <div class="col-sm-8">
                        <label><input type="radio" {{ $product->status == 1 ? 'checked' : '' }} name="status" value="1"/> Published</label>
                        <label><input type="radio" {{ $product->status == 0 ? 'checked' : '' }} name="status" value="0"/> Unpublished</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label"></label>
                    <div class="col-sm-8">
                        <button type="submit" class="btn btn-success mb-5">Update Product</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
