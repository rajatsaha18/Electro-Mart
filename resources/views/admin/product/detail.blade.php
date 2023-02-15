@extends('admin.master')

@section('title')
    Admin | Product Detail
@endsection

@section('body')
    <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
    <h3 class="text-center">Product Detail Info</h3>
    <div class="tab-content mb-5">
        <div class="tab-pane active" id="horizontal-form">
            <table class="table table-bordered">
                <tr>
                    <th>Product Id</th>
                    <td>{{ $product->id }}</td>
                </tr>

                <tr>
                    <th>Product Name</th>
                    <td>{{ $product->name }}</td>
                </tr>

                <tr>
                    <th>Product Code</th>
                    <td>{{ $product->code }}</td>
                </tr>

                <tr>
                    <th>Product Category Name</th>
                    <td>{{ $product->category->name }}</td>
                </tr>

                <tr>
                    <th>Product SubCategory Name</th>
                    <td>{{ $product->subcategory->name }}</td>
                </tr>

                <tr>
                    <th>Product Brand Name</th>
                    <td>{{ $product->brand->name }}</td>
                </tr>

                <tr>
                    <th>Product Unit Name</th>
                    <td>{{ $product->unit->name }}</td>
                </tr>

                <tr>
                    <th>Product Regular Price</th>
                    <td>{{ $product->regular_price }}</td>
                </tr>

                <tr>
                    <th>Product Selling Price</th>
                    <td>{{ $product->selling_price }}</td>
                </tr>

                <tr>
                    <th>Product Stock Amount</th>
                    <td>{{ $product->stock_amount }}</td>
                </tr>

                <tr>
                    <th>Product Short Description</th>
                    <td>{{ $product->short_description }}</td>
                </tr>

                <tr>
                    <th>Product Long Description</th>
                    <td>{{ $product->long_description }}</td>
                </tr>

                <tr>
                    <th>Product Feature Image</th>
                    <td><img src="{{ asset($product->image) }}" alt="" height="70" width="55"></td>
                </tr>

                <tr>
                    <th>Product Sub Image</th>
                    <td>
                        @foreach($product->subImages as $subImage)
                            <img src="{{asset($subImage->image)}}" alt="" height="70" width="55">
                        @endforeach
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection
