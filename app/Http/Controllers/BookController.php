<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Book::all();
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books = Book::select('books.id', 'books.name', 'authors.name as author_name', 'authors.id as author_id')->join('authors', 'books.author_id', '=', 'authors.id')->get();
      $authors = Author::select('authors.name', 'authors.id')->get();
      return view('admin_part_books', ['books' => $books, 'authors' => $authors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Book::create($request->all());
      $created_book = Book::create($request->all());
      return response()->json(["Reply" => "Ok",]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       $books = Book::select('books.id', 'books.name', 'authors.name as author_name', 'authors.id as author_id')->join('authors', 'books.author_id', '=', 'authors.id')->get();
      $authors = Author::select('authors.name', 'authors.id')->get();
      return view('public_part_authors', ['books' => $books, 'authors' => $authors]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->fill($request->all());
        $book->save();
        return Book::all();
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
      $book->delete();
    }
}
