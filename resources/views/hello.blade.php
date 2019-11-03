<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

{{-- <h1>{{$book->title}}</h1>
<p>{{$book->price}} --}}
    
{{-- <p>{{$post}}</p> --}}
@foreach ($books as $book)
<h1>   {{$book->name}}   {{$book->price}} {{$book->author}}</h1>
<img src="/storage/{{ $book->cover }}" width="100">
@endforeach


    
</body>
</html>