<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Movie; //import movie

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function home()
    {
        return view('home', ['key' => 'home']);
    }

    public function movie()
    {
        $mv = Movie::orderBy('id', 'desc')->get(); //mengurutkan data movie berdasarkan id secara descending
        return view('movie', ['key' => 'movie', 'mv' => $mv]);
    }

    public function kategori()
    {
        return view('kategori', ['key' => 'kategori']);
    }
    public function genre()
    {
        return view('genre', ['key' => 'genre']);
    }
    public function addmovie()
    {
        return view('addmovie', ['key' => 'addmovie']);
    }
    public function savemovie(Request $request)
    {
        if($request->hasFile('poster'))
        {
            $file_name = time() . '.' . $request->file('poster')->extension();
            $path = $request->file('poster')->storeAs('poster', $file_name, 'public');
        }
        else
        {
            $path = "";
        }
        Movie::create([
            'imBD' => $request->imBD,
            'title' => $request->title,
            'year' => $request->year,
            'genre' => $request->genre,
            'poster' => $path
        ]);
        return redirect('/movie');
    }
    public function editmovie($id)
    {
        $mv = Movie::find($id);
        return view('editmovie', ['key' => 'editmovie', 'mv' => $mv]);
    }
    public function updatemovie(Request $request, $id)
    {
        $mv = Movie::find($id);
        $mv->imBD = $request->imBD;
        $mv->title = $request->title;
        $mv->year = $request->year;
        $mv->genre = $request->genre;
        // $mv->poster = $request->poster;
        if($request->poster)
        {
            if($mv->poster)
            {
                Storage::disk('public')->delete($mv->poster);
            }
            $file_name = time() . '.' . $request->file('poster')->extension();
            $path = $request->file('poster')->storeAs('poster', $file_name, 'public');
            $mv->poster = $path;
        }
        else
        {
            $path = "";
        }
        $mv->save();
        return redirect('/movie');

    }


}
