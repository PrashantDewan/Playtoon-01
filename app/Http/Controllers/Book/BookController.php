<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Books;
use App\Models\BooksPage;
use App\Models\BooksText;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Books::all();
        return view('admin.book.index', compact('books'));
    }

    public function create()
    {
        return view('admin.book.create');
    }

    public function store(Request $request)
    {
        // Validate the input
        $validatedData = $request->validate([
            'name' => 'required|string',
            'image' => 'nullable',
            'type' => 'required|in:page,text',
        ]);

        // Handle the image upload

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/books/'), $image_name);
            $image_path = 'images/books/' . $image_name;
        } else {
            $image_path = 'images/books/default.png';
        }

        // Create the book
        $book = new Books();
        $book->name = $request->name;
        $book->type = $request->type;
        $book->image = $image_path;
        $book->save();
        // Redirect to the book index page
        return redirect()->route('admin.books.index')->with('success', 'Book created successfully.');
    }

    public function addResources($id)
    {
        $book = Books::find($id);
        if ($book->type == 'text') {
            $texts = BooksText::where('book_id', $book->id)->first();
            if ($texts) {
                $content = $texts->content;
            } else {
                $content = '';
            }
            return view('admin.book.addText', compact('book', 'content'));
        } else {
            $bookPages = BooksPage::where('book_id', $book->id)->get();
            return view('admin.book.addPage', compact('book', 'bookPages'));
        }
    }
    public function storeResource(Request $request, $id)
    {
        try {
            $book = Books::find($id);
            if ($book->type == "text") {
                $texts = BooksText::where('book_id', $book->id)->first();
                if (!$texts) {
                    $texts = new BooksText();
                    $texts->book_id = $book->id;
                    $texts->content = $request->booktext;
                    $texts->save();
                } else {
                    $texts->content = $request->booktext;
                    $texts->update();
                }
            }
            return redirect()->route('admin.books.index')->with('success', 'Book updated successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Error .');
        }
    }
    public function storeResourcePage(Request $request, $id)
    {
        try {
            $book = Books::find($id);
            if ($book->type == "page") {
                $page = new BooksPage();
                $page->book_id = $book->id;
                $page->page_number = $request->page_number;
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $image_name = time() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('images/books/pages/'), $image_name);
                    $image_path = 'images/books/pages/' . $image_name;
                } else {
                    $image_path = 'images/books/default.png';
                }
                $page->image =  $image_path;
                $page->save();
            }
            return redirect()->back()->with('success', 'Book updated successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Error.');
        }
    }
    public function delteResourcePage($id)
    {
        try {
            $bookPage = BooksPage::find($id);
            $bookPage->delete();
            return redirect()->back()->with('success', 'Book Page Delete successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Error While Delting.');
        }
    }

    public function edit($id)
    {
        $book = Books::findOrFail($id);
        return view('admin.book.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        // Find the book
        $book = Books::findOrFail($id);

        // Validate the input
        $validatedData = $request->validate([
            'name' => 'required|string',
            'image' => 'nullable',
            'type' => 'required|in:page,text',
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/books/'), $image_name);
            $image_path = 'images/books/' . $image_name;
        } else {
            $image_path = 'images/books/default.png';
        }
        // Update the book
        $book = Books::find($id);
        $book->name = $request->name;
        $book->type = $request->type;
        $book->image = $image_path;
        $book->update();

        // Redirect to the book index page
        return redirect()->route('admin.books.index')->with('success', 'Book updated successfully.');
    }

    public function changeStatus($id)
    {
        try {
            $book = Books::find($id);
            if ($book->status == 'active') {
                $book->status = 'inactive';
            } else {
                $book->status = 'active';
            }
            $book->update();
            return redirect()->back()->with('success', 'Successfully Updated.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Error.');
        }
    }

    public function delete($id)
    {
        // Find the book
        $book = Books::findOrFail($id);

        // Delete the book
        $book->delete();

        // Redirect to the book index page
        return redirect()->route('admin.books.index')->with('success', 'Book deleted successfully.');
    }


    // api
    function getBooks()
    {
        try {
            $books = Books::where('status', 'active')->orderBy('id', 'desc')->get();
            foreach ($books as $book) {
                if ($book->type == 'text') {
                    $booktext = BooksText::where('book_id', $book->id)->first();
                    $book['text'] = $booktext;
                } else {
                    $bookpage = BooksPage::where('book_id', $book->id)->orderBy('page_number','asc')->get();
                    $book['page'] = $bookpage;
                }
            }
            return response([
                'status' => 200,
                'books' => $books,
            ]);
        } catch (\Throwable $th) {
            return response([
                'status' => 500,
                'message' => 'Error'.$th
            ]);
        }
    }
}