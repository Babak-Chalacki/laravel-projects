@extends('admin.admin_template')
@section('content')

@if(@session('message'))
<div class="alert alert-{{@session('color')}}" role="alert">
    {{ @session('message') }}
  </div>
@endif

<table class="table table-dark table-striped">
    <tr>
        <th>#</th>
        <th>city</th>
        <th>delete / edit</th>
        <div class="" dir="rtl"> <a href="{{ url("/admin/cities/add") }}"class="btn btn-success">insert city</a></div>

    </tr>
    @foreach ($cities as $citie)
        <tr>
            <td>{{$citie["id"]}}</td>
            <td>{{$citie["name"]}}</td>
            <td><a href='{{ url("/admin/cities/delete/$citie->id") }}'class="btn btn-danger">delete</a>
            <a href='{{ url("admin/cities/edit/$citie->id") }}'class="btn btn-info">edit</a></td>
        </tr>
    @endforeach
  </table>

@endsection
