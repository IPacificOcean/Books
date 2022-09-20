<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      return Author::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      // $books = DB::select('SELECT 
      // authors.author, (SELECT Count(books.title) FROM books WHERE books.author_id=authors.id) FROM authors')->get();
      $authors = DB::select('SELECT authors.id, authors.name, (SELECT Count(books.name) FROM books WHERE books.author_id=authors.id) AS count_books FROM authors');
      return view('admin_part_authors', ['authors' => $authors]);
    }
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
      $created_Author = Author::create($request->all());
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
        $authors = DB::select('SELECT authors.id, authors.name, (SELECT Count(books.name) FROM books WHERE books.author_id=authors.id) AS count_books FROM authors');
      return view('public_part_authors', ['authors' => $authors]);
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
         $author = Author::findOrFail($id);
        $author->fill($request->all());
        $author->save();
        return Author::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $author->delete();
    }
}
