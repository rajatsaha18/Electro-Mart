@extends('admin.master')

@section('title')
    Admin | Edit Brand
@endsection

@section('body')
<h4 class="text-center text-success">{{ Session::get('message') }}</h4>
    <h3 class="text-center">Edit Brand Form</h3>
    <div class="tab-content mb-5">
        <div class="tab-pane active" id="horizontal-form">
            <form class="form-horizontal" action="{{ route('brand.update',['id'=>$brand->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Brand Name</label>
                    <div class="col-sm-8">
                        <input type="text" value="{{ $brand->name }}" class="form-control1" name="name" placeholder="Enter Category Name">
                        <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                    </div>

                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Brand Description</label>
                    <div class="col-sm-8">
                        <textarea class="form-control1" name="description" placeholder="Description here">{{ $brand->description }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Brand Image</label>
                    <div class="col-sm-8">
                        <input type="file" class="form-control-file" name="image"/>
                        <img src="{{ asset($brand->image) }}" alt="" height="80" width="70">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Publication Status</label>
                    <div class="col-sm-8">
                        <label><input type="radio" {{ $brand->status == 1 ? 'checked' : '' }} name="status" value="1"/> Published</label>
                        <label><input type="radio" {{ $brand->status == 0 ? 'checked' : '' }} name="status" value="0"/> Unpublished</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label"></label>
                    <div class="col-sm-8">
                        <button type="submit" class="btn btn-success mb-5">Update Brand</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
