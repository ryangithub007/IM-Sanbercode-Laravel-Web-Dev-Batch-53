<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function daftar() {
        return view("register");
    }

    public function tampil(Request $request) {
        $namaDepan = $request['fname'];
        $namaBelakang = $request['lname'];

        return view("welcome", ["namaDepan" => $namaDepan, "namaBelakang" => $namaBelakang]);
    }
}
