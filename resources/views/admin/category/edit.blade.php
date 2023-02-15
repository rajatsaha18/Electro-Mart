@extends('admin.master')

@section('title')
    Admin | Edit Category
@endsection

@section('body')
<h4 class="text-center text-success">{{ Session::get('message') }}</h4>
    <h3 class="text-center">Edit Category Form</h3>
    <div class="tab-content mb-5">
        <div class="tab-pane active" id="horizontal-form">
            <form class="form-horizontal" action="{{ route('category.update', ['id' => $category->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Category Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" value="{{ $category->name }}" name="name" placeholder="Enter Category Name">
                    </div>

                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Category Description</label>
                    <div class="col-sm-8">
                        <textarea class="form-control1" name="description" placeholder="Description here">{{ $category->description }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Category Image</label>
                    <div class="col-sm-8">
                        <input type="file" class="form-control-file" name="image"/>
                        <img src="{{ asset($category->image) }}" alt="" height="80" width="60">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Publication Status</label>
                    <div class="col-sm-8">
                        <label><input type="radio" name="status" {{ $category->status == 1 ? 'checked' : '' }} value="1"/> Published</label>
                        <label><input type="radio" name="status" {{ $category->status == 0 ? 'checked' : '' }} value="0"/> Unpublished</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label"></label>
                    <div class="col-sm-8">
                        <button type="submit" class="btn btn-success mb-5">Update Category</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection

