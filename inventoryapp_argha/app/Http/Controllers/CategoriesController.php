<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriesController extends Controller
{
    public function create()
    {
        return view('categories.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5',
            'description' => 'required',
        ], [
            'required' => 'Inputan :attribute wajib diisi',
            'min' => "Inputan minimimal :min karakter"
        ]);

        $now = Carbon::now();

        DB::table('categories')->insert([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'created_at' => $now,
            'updated_at' => $now
        ]);

        return redirect('/categories');
    }

    public function index()
    {
        $categories = DB::table('categories')->get();

        return view('categories.index', ['categories' => $categories]);
    }

    public function show($id)
    {
        $categories = DB::table('categories')->find($id);

        return view('categories.detail', ['categories' => $categories]);
    }
}
