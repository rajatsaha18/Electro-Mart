@extends('admin.master')

@section('title')
    Admin | Add Sub Category
@endsection

@section('body')
<h4 class="text-center text-success">{{ Session::get('message') }}</h4>
    <h3 class="text-center">Add Sub-Category Form</h3>
    <div class="tab-content mb-5">
        <div class="tab-pane active" id="horizontal-form">
            <form class="form-horizontal" action="{{ route('sub-category.new') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Category Name</label>
                    <div class="col-sm-8">
                        <select name="category_id" class="form-control1" required>
                            <option value="" disabled selected>--Category Name--</option>
                            @foreach ($categories as $category )
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach

                        </select>
                        <span class="text-danger">{{ $errors->has('category_id') ? $errors->first('category_id') : '' }}</span>
                    </div>

                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">SubCategory Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="name" placeholder="Enter SubCategory Name">
                    </div>

                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">SubCategory Description</label>
                    <div class="col-sm-8">
                        <textarea class="form-control1" name="description" placeholder="Description here"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">SubCategory Image</label>
                    <div class="col-sm-8">
                        <input type="file" class="form-control-file" name="image"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Publication Status</label>
                    <div class="col-sm-8">
                        <label><input type="radio" name="status" value="1" checked/> Published</label>
                        <label><input type="radio" name="status" value="0"/> Unpublished</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label"></label>
                    <div class="col-sm-8">
                        <button type="submit" class="btn btn-success mb-5">Create New SubCategory</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection

