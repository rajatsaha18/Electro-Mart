@extends('admin.master')

@section('title')
    Admin | Add Unit
@endsection

@section('body')
<h4 class="text-center text-success">{{ Session::get('message') }}</h4>
    <h3 class="text-center">Add Unit Form</h3>
    <div class="tab-content mb-5">
        <div class="tab-pane active" id="horizontal-form">
            <form class="form-horizontal" action="{{ route('unit.new') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Unit Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="name" placeholder="Enter Unit Name">
                        <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Unit Code</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="code" placeholder="Enter Unit Code">
                        <span class="text-danger">{{$errors->has('code') ? $errors->first('code') : ''}}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Unit Description</label>
                    <div class="col-sm-8">
                        <textarea class="form-control1" name="description" placeholder="Description here"></textarea>
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
                        <button type="submit" class="btn btn-success mb-5">Create New Unit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
