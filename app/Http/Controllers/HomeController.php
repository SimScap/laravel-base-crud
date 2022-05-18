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

public function store(Request $request)
{
    $data = $request->all();

    $comic = new Comic();
    $comic->title = $data['title'];
    $comic->description = $data['description'];
    $comic->thumb = $data['thumb'];
    $comic->price = $data['price'];
    $comic->series = $data['series'];
    $comic->sale_date = $data['sale_date'];
    $comic->type = $data['type'];
    $comic->save();

    return redirect()->route("comics.index", $comic);
}

public function edit(Comic $comic)
{
    return view('comics.edit', ["comic" => $comic]);
}

public function update(Request $request, Comic $comic)
{   
    $data = $request->all();

    $comic->title = $data['title'];
    $comic->description = $data['description'];
    $comic->thumb = $data['thumb'];
    $comic->price = $data['price'];
    $comic->series = $data['series'];
    $comic->sale_date = $data['sale_date'];
    $comic->type = $data['type'];
    $comic->save();

    return redirect()->route("comics.index", $comic);
}
public function destroy(Comic $comic)
{
    $comic->delete();
    return redirect()->route("comics.index");
}
}
