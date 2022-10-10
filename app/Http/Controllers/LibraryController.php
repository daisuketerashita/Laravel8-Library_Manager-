<?php

namespace App\Http\Controllers;

use App\Models\Library;
use App\Models\Log;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user();

        return view('library.borrow',[
            'library' => $library,
            'user' => $user,
        ]);
    }

    public function borrow(Request $request)
    {
        $library = Library::find($request->id);
        $library->user_id = Auth::id();
        $library->save();

        $log = new Log();
        $log->user_id = Auth::id();
        $log->library_id = $request->id;
        $log->rent_date = Carbon::now();
        $log->return_due_date = $request->return_due_date;
        $log->return_date = null;
        $log->save();

        return redirect('library/index');
    }
}
