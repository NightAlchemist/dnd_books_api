<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Response;

class BookController extends Controller
{
    // Display a listing of the books.
    public function index()
    {
        $books = Book::all();
        return response()->json(['data' => $books]);
    }

    // Store a newly created book in the database.
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'acronym' => 'required|string|unique:books',
            'release_date' => 'required|date',
            'type' => 'required|string',
        ]);

        $book = Book::create($request->all());

        return response()->json(['message' => 'Book created successfully.', 'data' => $book], Response::HTTP_CREATED);
    }

    // Display the specified book.
    public function show(Book $book)
    {
        return response()->json(['data' => $book]);
    }

    // Update the specified book in the database.
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'name' => 'required|string',
            'acronym' => 'required|string|unique:books,acronym,' . $book->id,
            'release_date' => 'required|date',
            'type' => 'required|string',
        ]);

        $book->update($request->all());

        return response()->json(['message' => 'Book updated successfully.', 'data' => $book], Response::HTTP_OK);
    }

    // Remove the specified book from the database.
    public function destroy(Book $book)
    {
        $book->delete();

        return response()->json(['message' => 'Book deleted successfully.'], Response::HTTP_NO_CONTENT);
    }
}

