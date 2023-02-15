@extends('admin.master')

@section('title')
    Admin | Manage SubCategory
@endsection

@section('body')
<h4 class="text-center text-success">{{ Session::get('message') }}</h4>
<h3 class="text-center">All SubCatgory info</h3>
<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
    <div class="panel-body no-padding">
        <table class="table table-striped">
            <thead>
                <tr class="warning">
                    <th>Sl No.</th>
                    <th>Category Name</th>
                    <th>SubCategory Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subCategories as $subCategory)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $subCategory->category->name }}</td>
                    <td>{{ $subCategory->name }}</td>
                    <td>{{ $subCategory->description }}</td>
                    <td><img src="{{ asset($subCategory->image) }}" alt="" height="80" width="60"></td>
                    <td>{{ $subCategory->status == 1 ? 'published' : 'unpublished' }}</td>
                    <td>
                        <a href="{{ route('sub-category.edit',['id' => $subCategory->id]) }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="{{ route('sub-category.delete',['id' => $subCategory->id]) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete this ?')">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>

                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection


