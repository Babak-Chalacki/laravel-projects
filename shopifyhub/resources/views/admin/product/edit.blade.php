@extends('admin.admin_template')
@section('content')
<center><h3>edit</h3></center>
{{-- @foreach ($categories as $category) --}}


<form method="POST" enctype="multipart/form-data" action="{{ url("/admin/product/edit/$product->id") }}">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">name</label>
      <input name="name" value="{{ $product->name }}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">price</label>
      <input name="price" value="{{ $product->price }}" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">price_off</label>
      <input name="price_off" value="{{ $product->price_off }}" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">count</label>
      <input name="count" value="{{ $product->count }}" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">description	 </label>
        <textarea name="description"  class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $product->description }}</textarea>
      </div>

      <center>
        <div style="width:400px">
            <div class="input-group">
                <span class="input-group-btn">
                  <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                    <i class="fa fa-picture-o"></i> Choose
                  </a>
                </span>
                <input value="{{ url($product->images->first()->url) }}"  id="thumbnail" class="form-control" type="text" name="image">
              </div>
              <div id="holder" style="margin-top:15px;max-height:100px;"></div>

           </div>
       </center>

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
  {{-- @endforeach --}}
@endsection
