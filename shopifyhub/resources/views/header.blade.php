
<style>
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
                    @auth
                    <li class="nav-item">
                            <a class="nav-link" href="{{ url("/logout") }}">logout</a>
                        </li>
                    <li class="nav-item">
                            <a class="nav-link" href="#">{{ Auth::user()->name }} <i class="fa fa-user"></i></a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url("/login") }}">login</a>
                        </li>
                            <li class="nav-item">
                            <a class="nav-link" href="{{ url("/register") }}">register</a>
                            </li>
                        @endauth
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Product categorization

                        </a>
                        <ul class="dropdown-menu">
                            @foreach ($categories as $category)
                            <li><a class="dropdown-item" href="#">{{ $category->title }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    @auth
                        <li class="nav-item">
                    <a class="nav-link" href="{{ url("/carts") }}"><i class="fas">&#xf07a;</i></a>
                </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
