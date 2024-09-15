<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use App\Models\Book;
use App\Models\Scholar;
use App\Models\Tag;
use Illuminate\Http\Request;

class BookController extends Controller
{

  public function index(Request $request)
  {

    $query = Book::query()
                  ->with(['author', 'tags', 'courses'])
                  ->where('lang', '=', App::currentLocale());

    if($request->ajax()) {
      $query = $query->orderBy($request->input('order') ?? 'created_at', 'desc');

      if($request->has('tag')){
        $query = $query->whereRelation('tags', 'name', '=', $request->tag);
      };

      if($request->has('author')){
        $author = explode('+', $request->author);
        $query = $query->whereHas('author', function ($q, $author) {
          $q->where('first_name', '=', $author[0])
          ->where('last_name', '=', $author[1]);
        });
      };

      return response()->json(['books' => $query->get()]);
    }

    return view('books.index', [
      'books' => $query->latest()->paginate(10),
    ]);
  }

  public function show(Book $book)
  {
    return view('books.show', [
      'book' => $book,
    ]);
  }

}
