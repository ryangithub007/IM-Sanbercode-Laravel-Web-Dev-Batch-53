<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view("welcome");
    }

    public function template() {
        return view("layout.master");
    }

    public function formatTable() {
        return view("partial.table");
    }

    public function contentTable() {
        return view("partial.data-table");
    }
}
