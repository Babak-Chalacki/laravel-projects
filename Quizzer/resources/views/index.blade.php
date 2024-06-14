<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirect on Click</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
    </style>
</head>

<body style="background-color: rgb(220, 220, 212)">
    <div class="row mt-5">
        <div class="col mt-5"></div>
    </div>
    <div class="row mt-5">
        <div class="col mt-5"></div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <a style="text-decoration: none" href="/question/1">
                    <div class="bg-light p-5 rounded shadow-lg">

                        <i class="fa fa-flag-checkered fa-5x mb-3" id="redirect-icon"></i>


                        <h2 class="text-center">برای شروع کلیک کنید</h2>
                        <p class="text-center">آزمون تست آرکیتایپ ها</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#redirect-icon').on('click', function() {
                window.location.href =
                    'https://www.example.com'; // Replace with the URL you want to redirect to
            });
        });
    </script>
</body>

</html>
