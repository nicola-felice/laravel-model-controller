<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h2>Movies list:</h2>
  <ul>
    @foreach ($movies as $movie)
    <li>
      <h4>{{$movie["title"]}}</h4>
      <p>{{$movie["nationality"]}}</p>
      <p>{{$movie["date"]}}</p>
      <p>{{$movie["vote"]}}</p>
    </li>        
    @endforeach
  </ul>
</body>
</html>