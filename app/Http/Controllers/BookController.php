<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
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

}
