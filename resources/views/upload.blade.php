@extends('layouts.app')

@section('content')

    <form action="/books/addbookform" method="post" class="form-horizontal" enctype="multipart/form-data">
        {{-- "/books/insert"method="post", route{{('upload.file')}},action data --}}
        {{csrf_field()}}
        <table>
        <br>
              
            <tr>

                <td>book name:</td>
                <td>
                    <input type="text" name="name">

                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                
                </td>
            </tr>
            <tr>

                    <td>book price:</td>
                    <td>
                        <input type="text" name="price">

                        @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    
                    </td>
                </tr>
                <tr>

                        <td>Auther Name:</td>
                        <td>
                            <input type="text" name="author">

                            @error('author')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                        </td>
                    </tr>
            
                <tr>
                    <td>Add Image:</td>
                    <td>
                        <input type="file" name="cover">

                        @error('cover')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="btn btn-info">Add Book</button>
                    </td>
                </tr>
        </table>
    </form>

@endsection