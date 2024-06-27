

@extends('admin.admin_template')
@section('content')

<table class="table table-dark table-striped">
<div dir="rtl">    <a href="{{ url("/admin/product/insert") }}" class="btn btn-success">insert new</a></td>
</div>
<tr>

    <th>#</th>
    <th>name</th>
    <th>price</th>
    <th>price_off</th>
    <th>count</th>
    <th>delete/edit</th>
    <th>pic</th>
</tr>
    @foreach ($products as $product)
<tr>
    <td>{{ $product->id }}</td>
    <td>{{ $product->name }}</td>
    <td>{{ $product->price }}</td>
    <td>{{ $product->price_off }}</td>
    <td>{{ $product->count }}</td>
    <td><img width="100px" src="{{ url($product->images->first()->url) }}" alt=""></td>
    <td><a href="{{ url("/admin/product/delete/$product->id") }}" class="btn btn-danger">delete</a>
    <a href="{{ url("/admin/product/edits/$product->id") }}" class="btn btn-info">edit</a></td>
</tr>
@endforeach
</table>

@endsection
