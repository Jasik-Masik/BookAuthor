<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

class MainController extends Controller
{
    public function form(){
        return view('form');
    }

    public function book(){

        $authors = new Author();
        $books = new Book();
        return view('book', [
            'books' => $books->get(),
            'authors' => $authors->get()
        ]);
    }

    public function submit(Request $req){
        $book = new Book();
        $book->name = $req->input('book_name');
        $book->description = $req->input('description');
        $book->page_count = $req->input('page_count');
        $book->author_id = $req->input('author_id');
        $book->save();

        return redirect()->route('book');
}




}
