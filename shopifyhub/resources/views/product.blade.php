@extends('template')
@section('content')
@section('title')
shopify-hub product
@endsection
    <title>shopify-hub Product</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
                    @foreach($product->images as $image)
                    <img width="500px" src="{{ URL::to('/') }}/{{ $image->url }}"  class="img-fluid">
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
            <div class="col-md-12 mt-5">
                <h2 class="text-center">Related Products</h2>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <img src="https://loremflickr.com/640/480/bag" class="card-img-top" alt="Related Product 1">
                            <div class="card-body">
                                <h5 class="card-title">Leather Tote Bag</h5>
                                <p class="card-text">$79.99</p>
                                <a href="#" class="btn btn-primary">View Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="https://loremflickr.com/640/480/bag" class="card-img-top" alt="Related Product 2">
                            <div class="card-body">
                                <h5 class="card-title">Canvas Messenger Bag</h5>
                                <p class="card-text">$59.99</p>
                                <a href="#" class="btn btn-primary">View Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="https://loremflickr.com/640/480/bag" class="card-img-top" alt="Related Product 3">
                            <div class="card-body">
                                <h5 class="card-title">Leather Briefcase</h5>
                                <p class="card-text">$149.99</p>
                                <a href="#" class="btn btn-primary">View Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="https://loremflickr.com/640/480/bag" class="card-img-top" alt="Related Product 4">
                            <div class="card-body">
                                <h5 class="card-title">Backpack with USB Charging</h5>
                                <p class="card-text">$89.99</p>
                                <a href="#" class="btn btn-primary">View Product</a>
                            </div>
                        </div>
                    </div>
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
@endsection
