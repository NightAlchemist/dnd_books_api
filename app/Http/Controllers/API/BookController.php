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
        try {
            $books = Book::all();
            return response()->json(['data' => $books]);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred while fetching books.', 'error' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    // Store a newly created book in the database.
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'acronym' => 'required|string|unique:books',
                'release_date' => 'required|date',
                'type' => 'required|string',
            ]);

            $book = Book::create($request->all());

            return response()->json(['message' => 'Book created successfully.', 'data' => $book], Response::HTTP_CREATED);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred while creating the book.', 'error' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    // Display the specified book.
    public function show(Book $book)
    {
        try {
            return response()->json(['data' => $book]);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred while fetching the book.', 'error' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    // Update the specified book in the database.
    public function update(Request $request, Book $book)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'acronym' => 'required|string|unique:books,acronym,' . $book->id,
                'release_date' => 'required|date',
                'type' => 'required|string',
            ]);

            $book->update($request->all());

            return response()->json(['message' => 'Book updated successfully.', 'data' => $book], Response::HTTP_OK);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred while updating the book.', 'error' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    // Remove the specified book from the database.
    public function destroy(Book $book)
    {
        try {
            $book->delete();

            return response()->json(['message' => 'Book deleted successfully.'], Response::HTTP_NO_CONTENT);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred while deleting the book.', 'error' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}


