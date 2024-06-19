@extends('admin.admin_template')
@section('content')

<table class="table table-dark table-striped">
<tr>
    <th>customer</th>
    <th>product</th>
    <th>count</th>
</tr>

@foreach ($orders as $order)
<tr>

    <td>{{ $order->user->name }}</td>
    <td>{{ $order->product->name }}</td>
    <td>{{ $order->count }}</td>
</tr>
@endforeach

</table>

@endsection
