
@extends('admin.admin_template')
@section('content')
<center><h3>edit city</h3></center>
<form method="POST" action="{{ url("/admin/cities/edit/$city->id") }}">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">city name</label>
      <input type="text" class="form-control" placeholder="{{ $city->name }}..." name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
