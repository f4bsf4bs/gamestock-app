<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Game</title>
    <link rel="stylesheet" href="/css/games_create.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
<div class="container min-vh-100 d-flex justify-content-center align-items-center">
    <form action="/games" method="post">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label for="title" class="form-label">Game:</label>
            <input type="text" class="form-control" name="name">
        </div>
            <button type="submit" class="btn btn-primary btn-dark" name="submit" value="submit">Submit</button>
    </form>
</div>
</body>
</html>