<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Publisher;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $allBook = Book::with('categories', 'publishers')->get();
        return view('book.index', compact('allBook'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $publishers = Publisher::all();

        return view('book.create',compact( 'categories', 'publishers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Make validation
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'book_price' => 'required|numeric|min:0',
            'publication_year' => 'required',
            'category_id' => 'required',
            'publisher_id' => 'required',
        ]);

        // Save data
        Book::create($validatedData);

        // Redirect

        return redirect()->route('book.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        $categories = Category::all();
        $publishers = Publisher::all();

        return view('book.show', compact('book','categories', 'publishers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $categories = Category::all();
        $publishers = Publisher::all();
        return view('book.edit', compact('book', 'categories', 'publishers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        // Make validation
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'book_price' => 'required|numeric|min:0',
            'publication_year' => 'required',
            'category_id' => 'required',
            'publisher_id' => 'required',
        ]);

        // Update data
        $book->update($validatedData);

        // Redirect
        return redirect()->route('book.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('book.index');
    }
}
