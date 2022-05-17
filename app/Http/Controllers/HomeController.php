<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;


class HomeController extends Controller
{
public function index(){
    $newComics = Comic::all();
    return view('comics.index', ["comics" => $newComics]);
}

public function show($id)
    {
        $comics = Comic::findOrFail($id);
        return view('comics.show', ["comics" => $comics]);
    }    

public function create()
    {
        return view('comics.create');
    }    
}
