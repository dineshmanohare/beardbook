<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BOOKS</title>
</head>
<body>
    <h1>BOOKS</h1>
    <button href="/add" type="button" onclick="">Add Book</button>
    <h1>book list</h1>


   @foreach ($books as $book)
        <h2>{{ $book->title }}</h2>
        <p>{{ $book->price }}</p>

   @endforeach
   
</body>
</html>