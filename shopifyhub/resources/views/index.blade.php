@extends('template')
@section('content')
@section('title')
shopify-hub
@endsection
    <style>
         body {
        perspective: 1000px;
        /* background-color: rgb(210, 206, 206) */
    }

    .container {
        transform-style: preserve-3d;
    }

    /* .card {
        transform: rotateY(30deg);
        transition: transform 0.5s;
    } */

    /* .card:hover {
        transform: rotateY(-30deg);
    } */
            .navbar {
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }
            .hero {
                background-image: url('{{ asset('img/menu.webp') }}');

                background-size: cover;
                background-position: center;
                color: #fff;
                padding: 100px 0;
            }
            .hero h1 {
                font-size: 4rem;
                font-weight: 700;
                margin-bottom: 1rem;
            }
            .hero p {
                font-size: 1.5rem;
                margin-bottom: 2rem;
            }
            .featured-products {
                padding: 80px 0;
            }
            .featured-products h2 {
                font-size: 2.5rem;
                font-weight: 700;
                margin-bottom: 2rem;
            }
            .card {
                border: none;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                transition: all 0.3s ease;
            }
            .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
            }

    </style>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Welcome to Our shopifyhub Website</h1>
            <p>Discover the latest products and offers from our store.</p>
            <a href="#" class="btn btn-primary btn-lg">Shop Now</a>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section class="featured-products">
        <div class="container">
            <h2 class="text-center">Featured Products</h2>
            <div class="row">
                @forelse($products as $product)
                @foreach($product->images as $image)
                <div class="col-md-3 ">
                    <div class="card mt-5 p-2">
                        <img src="{{ $image->url }}" alt="Product Image" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>

                            <a href="products/{{$product->id}}" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                @endforeach
                @empty
                    <p>No products found.</p>
                @endforelse



            </div>
        </div>
    </section>




@endsection
