<?php

namespace App\Http\Controllers;

use App\Models\Champion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
