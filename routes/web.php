<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// FIRST VIDEO TUTORIAL
// Route::get('/information',function()
// {
// return 'information';
// });
// Route::get('/view',function()
// {
// return view('dinesh');
// });
//SECOND VIDEO TUTORIAL
// Route::get('/request',function(){
//     $name = request('name');
//     return $name;
// });
// Route::get('/request',function()
// {
//   $name = request('name');
//   return view('request',[
//       'name'=> $name
//   ]
// );
// });

//THIRD VIDEO TUTORIAL

// Route::get('/posts/{post}',function()
// {
//   return view('post');
// });
// Route::get('/posts/{post}',function($post)
// {
//   return view('post',
//   [
//   'post' => $post
//   ]);
// });
// Route::get('/posts/{post}',function($post)
// {
//     $posts = [
//         'myfirstblog' => 'hey now I am learing laeavel',
//         'mysecondblog' => 'i know flutter also'

//     ];
//     return view('post',[
//         'post' => $posts[$post] ?? 'nothing here yet'
//     ]);
  
// });
// Route::get('/posts/{post}',function($post)
// {
//     $posts = [
//         'myfirstblog' => 'hey now I am learing laeavel',
//         'mysecondblog' => 'i know flutter also'

//     ];
//     if(! array_key_exists($post,$posts))
//     {
//         abort(404,'sorry thius key does not found');
//     }
//     return view('post',[
//         'post' => $posts[$post] 
//     ]);
  
// });

// FOURTH VIDEO TUTORIAL
// Route::get('/posts/{post}','PostController@show');
//  FIFTH VIDEO TUTORIAL

Route::get('/posts/{post}','PostController@show');
// Route::get('/bookinfo','BookController@show');






// Route::post('dinesh',function(){
// return request()->only('firstname','surname');
// });


// Route::get('/posts/{post}','PostsController@show');



// Route::get('posts/{slug}','PostsController@show');

// Route::get('/','PostsController@index');
// Route::get('books','BookController@booklist');
// Route::get('/books/add','BookController@add');
// Route::post('/books/insert','BookController@insert');
// Route::get('/book/{book}','BookController@show');

// Route::get('/dev', function () {
//     return Post::all();
// });







