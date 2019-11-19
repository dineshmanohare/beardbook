<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Http\Resources\BookResource;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index()
    {
        return new BookResource(Book::get());
    }
    public function booklist()
    {
        // $books = [
        //     [
        //         'title' => '3 idiots',
        //         'price' => 15,
        //     ],
        //     [
        //         'title' => 'jungle book',
        //         'price' => 200,
        //     ],
        //     [
        //         'title' => 'rajdhani express',
        //         'price' => 200,
        //     ],
        // ];
        return view('books',[
            'books'=> \DB::table('books')->get()
        ]);

    }
    public function add()
    {
        return view('add');
    }
    // public function insert(Request $req)
    // {
    //    $booktitle = $req->input('booktitle');
    //    $price = $req->input('price');

    //    $data = array('title'=>$booktitle,'price'=>$price);
    //    \DB::table('books')->insert($data);
    //    echo "success";
       
    // }
    public function insert(Request $req)
    {
         $title = $req->input('booktitle');
         $price = $req->input('bookprice');
         $data = array(['title'=>$title,'price'=>$price]);
         Book::insert($data);
    }

    // public function show(Book $book)
    // {
    //     return view('hello', compact('book'));
    // }
    public function show()
    {
        $books = Book::get();

        return view('hello',compact('books')
    );

    }
     public function showuploadform()
     {
         return view('upload');
     }
     public function storedata(Request $request)
     {
        //  return  $request->all();

        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'author' => 'required',
            'year' => 'required',
            'branch' => 'required',
            'cover' => 'required',
        ]);

        $hashname = $request->cover->hashName();
        Storage::disk('public')->put('/bookcovers', $request->file('cover'));

        Book::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'author' => $request->input('author'),
            'year' => $request->input('year'),
            'branch' => $request->input('branch'),
            'cover' => 'bookcovers/' . $hashname,
       ]);

       return back();

    //    $book = new Book();
    //    $book->name = $request->input('name');
    //    $book->bookprice = $request->input('bookprice');
    //    $book->author = $request->input('author');
    //    $book->save();
     }

}
