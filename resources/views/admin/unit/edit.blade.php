@extends('admin.master')

@section('title')
    Admin | Edit Unit
@endsection

@section('body')
<h4 class="text-center text-success">{{ Session::get('message') }}</h4>
    <h3 class="text-center">Edit Unit Form</h3>
    <div class="tab-content mb-5">
        <div class="tab-pane active" id="horizontal-form">
            <form class="form-horizontal" action="{{ route('unit.update',['id' => $unit->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Unit Name</label>
                    <div class="col-sm-8">
                        <input type="text" value="{{ $unit->name }}" class="form-control1" name="name" placeholder="Enter Category Name">
                        <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Unit Code</label>
                    <div class="col-sm-8">
                        <input type="text" value="{{ $unit->code }}" class="form-control1" name="code" placeholder="Enter Category Name">
                        <span class="text-danger">{{$errors->has('code') ? $errors->first('code') : ''}}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Unit Description</label>
                    <div class="col-sm-8">
                        <textarea class="form-control1" name="description" placeholder="Description here">{{ $unit->description }}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Publication Status</label>
                    <div class="col-sm-8">
                        <label><input type="radio" {{ $unit->status == 1 ? 'checked' : '' }} name="status" value="1"/> Published</label>
                        <label><input type="radio" {{ $unit->status == 0 ? 'checked' : '' }} name="status" value="0"/> Unpublished</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label"></label>
                    <div class="col-sm-8">
                        <button type="submit" class="btn btn-success mb-5">Update Unit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
