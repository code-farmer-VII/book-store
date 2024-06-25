<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //

    public function index(Request $request){

        
       
        return view('books', [
            'books' => Book::latest()->filter(request(['search']))->paginate(12)
        ]);
        }

    public function show(Book $book){
         $book = Book::find($book);
         return view('book', compact('book'));
    }

    public function create(){
        return view('addBooks');
    }

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'isbn' => 'required|string|max:20|unique:books',
            'publisher' => 'required|string|max:255',
            'number_pages' => 'required|integer|min:1',
            'language' => 'required|string|max:50',
            'publisher_date' => 'required|date',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'file_url' => 'required|file|mimes:pdf', 
            'image_url' => 'required|file|mimes:jpeg,png,jpg,gif', 
        ]);

        if($request->hasFile('file_url')&&$request->hasFile('image_url')){
            $validatedData['file_url'] = $request->file('file_url')->store('file_url','public');
            $validatedData['image_url'] = $request->file('image_url')->store('image_url','public');
        }

        $validatedData['user_id'] = auth()->id();
    
        Book::create($validatedData);
    
        return redirect()->route('books')->with('success', 'Book added successfully!');
    }

    public function edit(Book $book){
        return view('edditBook', compact('book'));
    }
    public function update(Book $book, Request $request){
         $validatedData = $request->validate([
            'title' =>'required|string|max:255',
            'author' =>'required|string|max:255',
            'isbn' =>'required|string|max:20',
            'publisher' =>'required|string|max:255',
            'number_pages' =>'required|integer|min:1',
            'language' =>'required|string|max:50',
            'publisher_date' =>'required|date',
            'description' =>'required|string',
            'price' =>'required|numeric|min:0',
            'file_url' =>'file|mimes:pdf', 
        'image_url' =>'file|mimes:jpeg,png,jpg,gif',
         ]);

         if($request->hasFile('file_url')&&$request->hasFile('image_url')){
            $validatedData['file_url'] = $request->file('file_url')->store('file_url','public');
            $validatedData['image_url'] = $request->file('image_url')->store('image_url','public');
        }

        $book->update($validatedData);
    
        return back()->with('success', 'Book updated successfully!');
        
    }
    
    public function destroy(Book $book){
        $book->delete();
        return redirect()->route('books')->with('success', 'Book deleted successfully!');
    }

    public function myStore() {
        return view('myStore', ['Books' => auth()->user()->books()->get()]);
    }
    


}
