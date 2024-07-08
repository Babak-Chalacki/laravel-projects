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
                        <strong>Rating:</strong>
                        <small onclick="add(1)" onmouseover="show(1)" style="color:blue;" class="far  fa-star rating " onmouseout="out()"></small>
                        <small onclick="add(2)"  onmouseover="show(2)" style="color:blue;" class="far fa-star rating " onmouseout="out()"></small>
                        <small onclick="add(3)"  onmouseover="show(3)" style="color:blue;" class="far fa-star rating " onmouseout="out()"></small>
                        <small onclick="add(4)"  onmouseover="show(4)" style="color:blue;" class="far fa-star rating " onmouseout="out()"></small>
                        <small onclick="add(5)"  onmouseover="show(5)" style="color:blue;" class="far fa-star rating " onmouseout="out()"></small> <span id="span" class="rating-value"></span>

                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="product-features">
                    <h2 hidden class="text-center">Product Features</h2>
                    <ul hidden>
                        <li  style="color: #fff;">Durable leather construction</li>
                        <li  style="color: #fff;">Padded laptop sleeve fits up to 15-inch laptops</li>
                        <li  style="color: #fff;">Multiple pockets for organization</li>
                        <li  style="color: #fff;">Adjustable shoulder straps for comfort</li>
                        <li  style="color: #fff;">Water-resistant exterior</li>
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
                <button onclick="add_to_cart({{ $product->id }},'{{ csrf_token() }}')" class="btn btn-primary btn-block"><i class="fas fa-shopping-cart"></i> Add to Cart</button>            </div>
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
                          {{-- <form class="comment-form" method="post" action="{{ url("/add_comment/". Auth::user()->id) }}"> --}}
                            {{-- <input type="hidden" id="thisproduct_id" name="thisproduct_id" value="{{ $product->id }}"> --}}
                          <form id="comment-form" class="comment-form">

                            <div class="form-group">
                                <textarea class="form-control" rows="3" id="ajaxText" name="text" placeholder="Write your comment here..." required></textarea>
                            </div>
                            <button type="button" onclick="send_new()" class="btn btn-primary">Submit</button>
                        </form>
                        {{-- <button type="submit"  class="btn btn-primary">Submit</button> --}}

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




let ratingValue = 4.2; // initial rating value
let ratingCount = 5; // total number of ratings
let span = document.getElementById("span")
function show(rating) {
  let ratings = document.querySelectorAll(".rating"); // get all elements with class "rating"
  for (let i = 0; i < ratings.length; i++) {
    if (i < rating) {
      ratings[i].classList.add("fas"); // add fas class to elements up to the rating value
      span.innerHTML = `(${rating})`
    } else {
      ratings[i].classList.remove("fas"); // remove fas class from elements above the rating value
    }
  }
}
const ratingContainer = document.querySelector(".rating-container"); // assume a parent element with this class

ratingContainer.addEventListener("click", function(event) {
    if (event.target.classList.contains("rating")) {
        event.target.classList.add("fas");

    }
});

ratingContainer.addEventListener("mouseout", function(event) {
    if (event.target.classList.contains("rating")) {
        event.target.classList.remove("fas");
    }
});

function add(x) {
  let json_data = {
    product_id: {{ $product->id }},
    score: x
  };

  fetch('/send-rating', {
    method: "POST",
    body: JSON.stringify(json_data), // convert json_data to JSON string
    headers: {
      "Content-Type": "application/json",
      "Accept": "application/json",
      "X-Requested-With": "XMLHttpRequest",
      "X-CSRF-Token": '{{ csrf_token() }}'
    },
  }).then(result => result.text()).then(result => {
    // alert("Your rating saved successfully")
    alert(result)
  })
}
</script>
<script>

function send_new() {
    const formData = new FormData(document.getElementById('comment-form'));
    const url = '/add_comment'; // Replace with your Laravel route

    fetch(url, {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}' // Laravel CSRF token
        }
    })
   .then(result => result.text())
   .then(result =>{
    // alert("your comment save successfuly")
    alert(result)
   })
}

    // async function send_new() {
    //     let json_data = {
    //         product_id: 123, // شناسه محصول را قرار دهید
    //         text: document.getElementById('ajaxText').value
    //     };

    //     try {
    //         const response = await fetch('/add_comment', {
    //             method: 'POST',
    //             headers: {
    //                 "Content-Type": "application/json",
    //                 "Accept": "application/json",
    //                 "X-Requested-With": "XMLHttpRequest",
    //                 "X-CSRF-Token": "your_csrf_token_here" // توکن CSRF خود را وارد کنید
    //             },
    //             body: JSON.stringify(json_data)
    //         });

    //         const result = await response.text();
    //         console.log(result);
    //         alert(result);
    //     } catch (error) {
    //         console.error(error);
    //     }
    // }




</script>

    {{-- <script src="{{url("js/ajax_comment.js")}}"></script> --}}
    <script src="{{url("js/ajax_add_to_cart.js")}}"></script>
@endsection
