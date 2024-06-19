@extends('admin.admin_template')
@section('content')

<table class="table table-dark table-striped">
<tr>
    <th>#</th>
    <th>name</th>
    <th>product</th>
    <th>text</th>
    <th>delete</th>
</tr>
@foreach ($comments as $comment)
<tr>
    <td>{{ $comment->id }}</td>
    <td>{{ $comment->user->name }}</td>
    <td>{{ $comment->product->name }}</td>
    <td>{{ $comment->text }}</td>
    <td><a class="btn btn-danger" href="{{ url("admin/comment/delete/$comment->id") }}">delete</a></td>
</tr>
@endforeach
</table>

@endsection
