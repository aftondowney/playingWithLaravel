<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $people = ['Amy', 'Marielle', 'Dillon'];

        return view('welcome', compact('people'));
    }

    public function about()
    {
        return view('pages.about');
    }
}
