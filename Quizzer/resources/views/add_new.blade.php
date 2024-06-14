<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Question</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="bg-light p-5 rounded shadow-lg">
                    <h2 class="text-center">Add New Question</h2>
                    <form method="POST" action="add_new">
                        @csrf
                        <div class="form-group">
                            <label for="question">Question:</label>
                            <input name="question" type="text" class="form-control" id="question"
                                placeholder="Enter your question">
                        </div>
                        <div class="input-group mt-4">
                            <div class="input-group-text">
                                <input name="correct" class="form-check-input mt-0" type="radio" value="0"
                                    checked aria-label="Radio button for following text input">
                            </div>
                            <input name="answer" type="text" class="form-control"
                                aria-label="Text input with radio button">
                        </div>
                        <div class="input-group mt-4">
                            <div class="input-group-text">
                                <input name="correct" class="form-check-input mt-0" type="radio" value="0"
                                    aria-label="Radio button for following text input">
                            </div>
                            <input name="answer" type="text" class="form-control"
                                aria-label="Text input with radio button">
                        </div>
                        <div class="input-group mt-4">
                            <div class="input-group-text">
                                <input name="correct" class="form-check-input mt-0" type="radio" value="0"
                                    aria-label="Radio button for following text input">
                            </div>
                            <input name="answer" type="text" class="form-control"
                                aria-label="Text input with radio button">
                        </div>
                        <div class="input-group mt-4">
                            <div class="input-group-text">
                                <input name="correct" class="form-check-input mt-0" type="radio" value="0"
                                    aria-label="Radio button for following text input">
                            </div>
                            <input name="answer" type="text" class="form-control"
                                aria-label="Text input with radio button">
                        </div>

                        <button type="submit" class="btn btn-primary">Add Question</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
