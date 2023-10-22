<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/games.css">
</head>
<body>
<div class="container align-items-center">
@if(count($allGames) > 0) 
<table class="table">
  <thead class="table table-dark">
    <tr>
      <th scope="col">ID</th>
      <th heigth=10 scope="col">NAME</th>
      <th heigth=10 scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
    @foreach($allGames as $game)
    <tr>
      <th scope="row">{{ $game->id }}</th>
      <td heigth="100" >{{ $game->name }}</td>
      <td>
        <a href="/games/edit/{{ $game->id }}" class="btn btn-info edit-btn btn-sm">Edit</a>
        <form action="/games/{{ $game->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger delete-btn btn-sm">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endif
</div>
</body>
</html>