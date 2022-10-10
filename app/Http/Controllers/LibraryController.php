<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index()
    {
        $libraries = Library::all();

        return view('library.index',['libraries' => $libraries]);
    }

    public function borrowingForm(Request $request)
    {
        $library = Library::find($request->id);

        return view('library.borrow',['library' => $library]);
    }
}
