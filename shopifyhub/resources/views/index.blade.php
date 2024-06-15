 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shopify-hub</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
body {
    perspective: 1000px;
}

.container {
    transform-style: preserve-3d;
}

.card {
    transform: rotateY(30deg);
    transition: transform 0.5s;
}

.card:hover {
    transform: rotateY(-30deg);
}
        .navbar {
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .hero {
            background-image: url('https://picsum.photos/1920/1080');
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
        .footer {
            background-color: #f8f9fa;
            padding: 40px 0;
        }
        .footer h5 {
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        .footer ul li a {
            color: #6c757d;
            text-decoration: none;
        }
        .footer ul li a:hover {
            color: #343a40;
        }
        .footer .social-links a {
            color: #6c757d;
            font-size: 1.5rem;
            margin-right: 1rem;
        }
        .footer .social-links a:hover {
            color: #343a40;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">shopify-hub</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Products
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Electronics</a>
                            <a class="dropdown-item" href="#">Fashion</a>
                            <a class="dropdown-item" href="#">Home & Kitchen</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
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
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://picsum.photos/300/200" alt="Product Image" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Product 1</h5>
                            <p class="card-text">This is a sample product description.</p>
                            <a href="product" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://picsum.photos/300/200" alt="Product Image" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Product 2</h5>
                            <p class="card-text">This is a sample product description.</p>
                            <a href="product" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://picsum.photos/300/200" alt="Product Image" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Product 3</h5>
                            <p class="card-text">This is a sample product description.</p>
                            <a href="product" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Company Information</h5>
                    <p>Address: 123 Main St, Anytown, USA</p>
                    <p>Phone: 555-555-5555</p>
                    <p>Email: [info@company.com](mailto:info@company.com)</p>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Shipping & Returns</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <ul class="list-unstyled social-links">
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <p class="text-muted text-center mb-0">Copyright &copy; 2024 E-commerce Website</p>
        </div>
    </footer>
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script> --}}
</body>
</html>


