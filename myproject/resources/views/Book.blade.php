<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <table class="table">
    
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">title</th>
        <th scope="col">author</th>
        <th scope="col">published_year</th>
      </tr>
    </thead>
    <tbody>
        @foreach($books as $book) 
        <tr>
            <td>{{$book->id}}</th>
            <td>{{$book->title}}</td>
            <td>{{$book->author}}</td>
            <td>{{$book->published_year}}</td>
        </tr>

        @endforeach
      <!-- <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
      </tr> -->
    </tbody>
  </table>
    </div>

</body>
</html>