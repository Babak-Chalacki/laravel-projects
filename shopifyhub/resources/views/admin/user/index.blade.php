@extends('admin.admin_template')
@section('content')

<table class="table table-dark table-striped">
<tr>
    <th>#</th>
    <th>name</th>
    <th>delete</th>
</tr>
    @foreach ($users as $user)
<tr>
    <td>{{ $user->id }}</td>
    <td>{{ $user->name }}</td>
    <td><a href="{{ url("/admin/user/delete/$user->id") }}" class="btn btn-danger">delete</a></td>
</tr>
@endforeach
</table>

@endsection
