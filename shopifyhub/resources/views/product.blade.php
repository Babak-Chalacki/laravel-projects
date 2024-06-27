@extends('template')
@section('content')
@section('title')
shopify-hub product
@endsection
    <title>shopify-hub Product</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{url("css/comment.css")}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .product-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        .related-products {
            margin-top: 20px;
        }
        .product-info {
            margin-bottom: 20px;
        }
        /* .product-features {
            color: #fff;
            background-color: rgba(0, 0, 0, 0.2);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-top:-23px;
        } */

    </style>
</head>
<body>

<!-- product.blade.php -->

{{-- <h1>{{ $product->name }}</h1>

<p>{{ $product->description }}</p>

<h2>Product Images:</h2>

<ul>
    @foreach($product->images as $image)
        <li><img src="{{ $image->url }}" alt="{{ $image->alt }}"></li>
    @endforeach
</ul> --}}


    {{-- دیجی&zwnj;کالا --}}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="product-image">
                    {{-- @foreach($product->images as $image) --}}
                    @foreach($product->images as $image)
                    <img width="500px" src="{{ url("$image->url") }}"  class="img-fluid">
                    @endforeach
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-info">
                    <h2 class="text-center">Product Information</h2>
                    <p>
                        <strong>Product Name:</strong> {{ $product->name }}
                        <br>
                        <strong>Product Description:</strong> {{ $product->description }}
                        <br>
                        <strong>Price:</strong> ${{ $product->price }}
                        <br>
                        <strong>Rating:</strong> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i> (4.2)
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="product-features">
                    <h2 hidden class="text-center">Product Features</h2>
                    <ul hidden>
                        <li style="color: #fff;">Durable leather construction</li>
                        <li style="color: #fff;">Padded laptop sleeve fits up to 15-inch laptops</li>
                        <li style="color: #fff;">Multiple pockets for organization</li>
                        <li style="color: #fff;">Adjustable shoulder straps for comfort</li>
                        <li style="color: #fff;">Water-resistant exterior</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="text-center">Add to Cart</h2>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button id="minus" class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="fas fa-minus"></i></button>
                    </div>
                    <input id="rangeInput" type="number"  min="1" class="form-control" placeholder="Quantity" aria-label="Quantity" aria-describedby="button-addon1" value="1">
                    <div class="input-group-append">
                        <button id="plus" class="btn btn-outline-secondary" type="button" id="button-addon2">   <i class="fas fa-plus"></i></button>
                    </div>
                </div>
                <button class="btn btn-primary btn-block"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
            </div>
        </div>



        <div class="row mt-4 mt-5">
        <div class="row mt-4 mt-5">
        <div class="row mt-4 mt-5">
        {{-- commnet   --}}
        <div class="comment-section">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-md-8">
                     @auth
                     <div class="card comment-card">
                        <div class="card-body">
                          <h4 class="card-title mb-4">add your Comment</h4>
                          <form class="comment-form" method="post" action="{{ url("/add_comment/". Auth::user()->id) }}">
                          {{-- <form class="comment-form"> --}}
                            @csrf
                            <input type="hidden" id="thisproduct_id" name="thisproduct_id" value="{{ $product->id }}">
                            <div class="form-group">
                                <textarea class="form-control" rows="3" id="comment" name="comment" placeholder="Write your comment here..." required></textarea>
                            </div>
                            {{-- <button type="button" onclick="send_new({{$product->id}})" class="btn btn-primary">Submit</button> --}}
                            <button type="submit"  class="btn btn-primary">Submit</button>
                                      </form>

                        </div>
                      </div>


                     @endauth

                    @if ($comments->count() > 0)
                    <div class="card comment-card mt-4">
                        <div class="card-body">
                          <h4 class="card-title mb-4">Comments</h4>

                          @foreach ($comments as $comment)
                          <div class=" p-4 comment-media {{ $loop->iteration % 2 == 0? 'bg-light' : 'bg-Muted ' }}">
                            <div class="comment-media-body media-body">
                              <h5 class="mt-0 mb-3">{{ $comment->user->name }}</h5>
                              <h4>{{ $comment->text }}</h4>
                              <div dir="rtl" class="comment-timestamp">
                                <i class="fas fa-clock"></i>{{ $comment->created_at->format('j F Y') }}
                              </div>
                            </div>
                          </div>
                          @endforeach

                        </div>
                      </div>
                    @endif
                    </div>
                  </div>
                </div>
              </div>
            {{-- commnet   --}}
            <div class="col-md-12 mt-5">
                <h2 class="text-center">Related Products</h2>
                <div class="row">
                    @forelse($productss as $products)
                    @foreach ($products->images as $image)
                    <div class="col-md-3">
                        <div class="card">
                            <img src="{{ url("$image->url") }}" class="card-img-top" alt="Related Product 1">
                            <div class="card-body">
                                <h5 class="card-title">{{$products->name}}</h5>
                                <p class="card-text">${{$products->price}}</p>
                                <a href="/products/{{$products->id}}" class="btn btn-primary">View Product</a>

                            </div>
                        </div>
                    </div>
                    @endforeach
                @empty
                    <p>No products found.</p>
                @endforelse



                </div>
            </div>
        </div>
    </div>
    <script>
let intervalId;

plus.addEventListener("mousedown", () => { rangeInput.value = parseInt(rangeInput.value) + 1;
    intervalId = setInterval(() => { rangeInput.value = parseInt(rangeInput.value) + 1; }, 200); });

minus.addEventListener("mousedown", () => { if (parseInt(rangeInput.value) > 1) {
     rangeInput.value = parseInt(rangeInput.value) - 1;
      intervalId = setInterval(() => { if (parseInt(rangeInput.value) > 1)
         { rangeInput.value = parseInt(rangeInput.value) - 1; } }, 200); } });

document.addEventListener("mouseup", () => { clearInterval(intervalId); });

</script>

{{-- @auth
<script>document.getElementById('comment-form').addEventListener('submit', function(event) {
    event.preventDefault();
    sendComment({{ Auth::user()->id }}, '{{ route('add-comment') }}');
  });
</script>
@endauth --}}

<script>

// async function send_new(productId) {
// //   let $ = document;
// //   let wrapper = $.getElementById("wrapper" + productId);

//   let form = document.getElementById("form" + productId);
//   let thisproduct_id = $.getElementById("thisproduct_id" + productId).value;
//   let comment = $.getElementById("comment" + productId).value;
//   let data = new FormData();
//   data.append('thisproduct_id', thisproduct_id);
//   data.append('comment', comment);

//   let csrfToken = $.querySelector('meta[name="csrf-token"]').content; // Get the CSRF token from the meta tag

//   let response = await fetch('/add_comment'+ productId, {
//     method: 'POST',
//     headers: {
//       'X-CSRF-TOKEN': csrfToken, // Use the CSRF token here
//     },
//     body: data
//   });

  // if (response.ok) {
  //     alert('Data sent successfully!');
  // } else {
  //     alert('Error sending data.');
  // }
}
    </script>
    {{-- <script src="{{url("js/ajax_comment.js")}}"></script> --}}
@endsection
