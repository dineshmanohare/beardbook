<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Book</title>
</head>
<body>
    <center>
        <form action="/books/insert"method="post">
            <table>
                <tr>
                    {{csrf_field()}}
                    <td>book title:</td>
                    <td><input type="text" name="booktitle"></td>
                </tr>
                <tr>
                        <td>price:</td>
                        <td><input type="text" name="price"></td>
                    </tr>
                    <tr>

                            <td><input type="submit" name="submit"value="add"></td>
                        </tr>
            </table>
        </form>
        </center>
    {{-- <center>
        <form action="books"method="post">
            <table>
                <tr>
                    <td>
                       Book title: 
                    </td>
                    <td>
                        <input type='text' name = 'booktitle'>
                     </td>
                </tr>
                <td>
                    Book price: 
                 </td>
                 <td>
                     <input type='text' name = 'bookprice'>
                  </td>
                  
                 <td>
                     <input type='submit' name = 'add'value=add>
                  </td>
            </table>
        </form>
    </center> --}}
</body>
</html>