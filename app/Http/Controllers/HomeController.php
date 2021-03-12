<?php

namespace App\Http\Controllers;
use App\Models\Library;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ()
    {
        return view ('create');

    }
    public function create()
    {
        return view ('library.create');
    }
    public function store (Request $request)
    {
        Library::create(['book'=>$request->book,
                        'author'=>$request->author,
                        'categories'=>$request->categories,
                        'year'=>$request->categories,]);

        return 'Dados salvos';
    }
    public function show()
    {
        $librarys=Library::all();
        return view('library.list', ['librarys'=>$librarys]);
    }
    public function destroy ($id)
    {
        $librarys=Library::findOrfail($id);
        $librarys->delete();
        return 'Dados eliminados';
    }
    public function edit($id)
    {
        $librarys=Library::findOrFail($id);
        return view ('Library.edit',['library'=>$librarys]);
    }
    public function update (Request $request, $id){
        $librarys = Library::findOrfail($id);
        $librarys->update([
            'book'=>$request->book,
            'author'=>$request->author,
            'categories'=>$request->categories,
            'year'=>$request->year,
        ]);
        return 'Dados actualizados';
    }

}

