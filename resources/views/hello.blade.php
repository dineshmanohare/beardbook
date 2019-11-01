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
<h1>{{$book->id}}   :  {{$book->title}}  :  {{$book->price}}</h1>
@endforeach


    
</body>
</html>