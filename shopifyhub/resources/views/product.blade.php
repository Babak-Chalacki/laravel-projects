<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shopify-hub Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
        .product-features {
            color: #fff;
            background-color: rgba(0, 0, 0, 0.2);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-top:-23px;
        }
        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }
        .loading-spinner {
            font-size: 3rem;
            color: #333;
            animation: spin 2s linear infinite;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="loading-overlay">
        <div class="loading-spinner">
            <i class="fas fa-spinner fa-spin"></i>
        </div>
        <h2>Loading...</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Product Display Page</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="product-image">
                    <img src="https://loremflickr.com/640/480/backpack" alt="Backpack Image" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-info">
                    <h2 class="text-center">Product Information</h2>
                    <p>
                        <strong>Product Name:</strong> Premium Leather Backpack
                        <br>
                        <strong>Product Description:</strong> This high-quality leather backpack is perfect for everyday use. It features a spacious main compartment, a padded laptop sleeve, and multiple pockets for organization.
                        <br>
                        <strong>Price:</strong> $99.99
                        <br>
                        <strong>Rating:</strong> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i> (4.2)
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="product-features">
                    <h2 class="text-center">Product Features</h2>
                    <ul>
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
                        <button class="btn btn-outline-secondary" type="button" id="button-addon1">-</button>
                    </div>
                    <input type="text" class="form-control" placeholder="Quantity" aria-label="Quantity" aria-describedby="button-addon1" value="1">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">+</button>
                    </div>
                </div>
                <button class="btn btn-primary btn-block"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        setTimeout(function(){
        // document.addEventListener("DOMContentLoaded", function() {
            document.querySelector(".loading-overlay").style.display = "none";
        // });
    }, 1500);
    </script>
</body>
</html>
