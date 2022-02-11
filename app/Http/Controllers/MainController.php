<?php

namespace App\Http\Controllers;

use App\Models\Champion;

class MainController extends Controller
{
    public function index()
    {
        $champions = Champion::all();

        return view('home')->with(compact('champions'));

    }

    public function show(int $id)
    {
        $champion = Champion::findOrFail($id);

        return view('championView')->with(compact('champion'));

    }
}
