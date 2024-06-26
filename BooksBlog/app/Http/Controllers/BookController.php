<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\File;
use App\FileUpload;

class BookController extends Controller
{
    use FileUpload;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        //$books = Book::all();
        $user_id = Auth::user()->id;
        $books = User::find($user_id)->books;
        if($books){
            return view("books.index", compact('books')); 
        }else{
            return redirect('login');
        }
        //$files = File::all();
        // $data = [
        //     $books,
        //     $files

        // ];
        //return view("books.index", compact('books'));
    }
    public function home()
    {
        $books = Book::all();
        return view("welcome", compact('books'));
    }
    public function book_profile($id){
        //$user_name = Auth::user()->name;
        $book = Book::find($id);

        return view("books.book_profile", compact('book','user_name'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(Auth::check()){
            return view('books.upload');
          }

        return redirect('login');
        //return view("books.upload");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userId = Auth::user()->id;
        request()->validate([
            'title' => 'required',
            'auther' => 'required',
            'description' => 'required|max:806',
            'publish_year' => 'required|max:6',
            ]);

        //$path = $this->FileUpload(Request, 'books_cover');
        //$file = $this->FileUpload(Request, $path);
        $avatar_path = $this->StoreAvatar($request,"books_avatar");
        $book_path = $this->StoreFile($request,"books_file");

        $book = Book::query()->create([
            "title"=> $request->input("title"),
            "auther"=> $request->input("auther"),
            "description"=> $request->input("description"),
            "publish_year"=> $request->input("publish_year"),
            "downloads"=> $request->input("downloads"),
            "avatar_path"=> $avatar_path,
            "file_path"=> $book_path,
            "user_id" => $userId,

        ]);
        //$avatar_path = $this->StoreAvatar($request,"book_avatar");
        // Book::create([
        //     "avatar_path"=> $avatar_path,
        // ]);
        // $file_path = $this->StoreFile($request,"book_file");
        // Book::create([
        //     "file_path"=> $file_path,
        // ]);

        return redirect("books")->with("success","done");
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //return $id;
        Book::destroy($id);
        //$book = Book::find($id);
        //$book->delete();
        return redirect("dashboard")->with("success","done");
        //
    }
}
