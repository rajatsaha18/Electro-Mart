@extends('admin.master')

@section('title')
    Admin | Manage Product
@endsection

@section('body')
<h4 class="text-center text-success">{{ Session::get('message') }}</h4>
<h3 class="text-center">All Product info</h3>
<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
    <div class="panel-body no-padding">
        <table class="table table-striped">
            <thead>
                <tr class="warning">
                    <th>Sl No.</th>
                    <th>Category</th>
                    <th>SubCategory</th>
                    <th>Brand</th>
                    <th>Product Name</th>
                    <th>Selling Price</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->subcategory->name }}</td>
                    <td>{{ $product->brand->name }}</td>
                    <td>{{ $product->name}}</td>
                    <td>{{ $product->selling_price}}</td>
                    <td>{{ $product->status == 1 ? 'published' : 'unpublished' }}</td>
                    <td>
                        <a href="{{ route('product.detail',['id' => $product->id]) }}" class="btn btn-info btn-sm">
                            <i class="fa fa-book"></i>
                        </a>

                        <a href="{{ route('product.edit',['id' => $product->id]) }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="{{ route('product.delete',['id' => $product->id]) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete this ?')">
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

