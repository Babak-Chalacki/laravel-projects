<!DOCTYPE html>
<html>

<head>
    <title>Exam Results</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .glassmorphist {
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px;
            margin: 40px auto;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class ="container">
        <div class="row mt-5">
            <div class="col">
                <a href="/">
                    <div class="btn btn-primary">home</div>
                </a>
            </div>
            <div class="col">
                {{-- <a href="">
                    <div class="btn btn-primary">home</div>
                </a> --}}
            </div>
            <div class="col">
                {{-- <a href="">
                    <div class="btn btn-primary">home</div>
                </a> --}}
            </div>
            <div class="col">
                {{-- <a href="">
                    <div class="btn btn-primary">home</div>
                </a> --}}
            </div>
            <div class="col">
                {{-- <a href="">
                    <div class="btn btn-primary">home</div>
                </a> --}}
            </div>
            <div class="col">
                {{-- <a href="">
                    <div class="btn btn-primary">home</div>
                </a> --}}
            </div>
            <div class="col">
                <a href="/add">
                    <div class="btn btn-primary">addNew</div>
                </a>
            </div>
        </div>
    </div>
    <div class="glassmorphist">
        <h2>Exam Results</h2>

        <p>Your final score is: {{ Session::get('user_score') }}</p>
        @if (Session::get('user_score') >= 4)
            <i class="fa fa-trophy" style="font-size: 48px; color: #007bff;"></i>
        @else
            <p>Keep practicing and you'll improve!</p>
        @endif

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>


{{-- <p>Your final score is: {{ Session::get('user_score') }}</p> --}}
