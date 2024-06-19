@extends('admin.admin_template')
@section('content')

<form method="POST" enctype="multipart/form-data" action="{{ url("/admin/product/add") }}">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">name</label>
      <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">price</label>
      <input name="price" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">price_off</label>
      <input name="price_off" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">count</label>
      <input name="count" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">description	 </label>
        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>

    <div class="mb-3">
    <center>  <label for="exampleInputEmail1" class="form-label">Category</label>
        <select name="Category_id" id="">
          @foreach ($categories as $category)
          <option value="{{ $category->id }}">{{ $category->title }}</option>
          @endforeach
        </select></center>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
