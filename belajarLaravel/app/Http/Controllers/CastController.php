<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    public function create() {
        return view('cast.create');
    }

    public function store(Request $request) {
        //Validasi
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'bio' => 'required|min:10'
        ]);

        // Insert Data
        DB::table('cast')->insert([
            'nama' => $request["name"],
            'umur' => $request["age"],
            'bio' => $request["bio"]
        ]);

        // Redirect ke halaman /cast
        return redirect('/cast');
    }

    public function index() {
        $cast = DB::table('cast')->get();
        return view('cast.index', ["cast" => $cast]);
    }

    public function show($id) {
        $castById = DB::table('cast')->find($id);
        
        return view('cast.detail', ['castById' => $castById]);
    }

    // Update

    public function edit($id) {
        $castById = DB::table('cast')->find($id);
        
        return view('cast.edit', ['castById' => $castById]);
    }

    public function update($id, Request $request) {
         //Validasi
         $request->validate([
            'name' => 'required',
            'age' => 'required',
            'bio' => 'required|min:10'
        ]);
        
        DB::table('cast')
              ->where('id', $id)
              ->update([
                'nama' => $request["name"],
                'umur' => $request["age"],
                'bio' => $request["bio"]
              ]);
        return redirect('/cast');
    }

    // Delete
    public function destroy($id) {
        $query = DB::table('cast')->where('id', $id)->delete();
        return redirect('/cast');
    }

}



