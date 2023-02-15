@extends('admin.master')

@section('title')
    Admin | Manage Unit
@endsection

@section('body')
<h4 class="text-center text-success">{{ Session::get('message') }}</h4>
<h3 class="text-center">All Unit info</h3>
<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
    <div class="panel-body no-padding">
        <table class="table table-striped">
            <thead>
                <tr class="warning">
                    <th>Sl No.</th>
                    <th>Unit Name</th>
                    <th>Unit Code</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($units as $unit)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $unit->name }}</td>
                    <td>{{ $unit->code }}</td>
                    <td>{{ $unit->description }}</td>
                    <td>{{ $unit->status == 1 ? 'published' : 'unpublished' }}</td>
                    <td>
                        <a href="{{ route('unit.edit',['id' => $unit->id]) }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="{{ route('unit.delete',['id' => $unit->id]) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete this ?')">
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

