<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Movie; //import movie
use function PHPUnit\Framework\returnArgument;
use Illuminate\Support\Facades\Auth;

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
        return redirect('/movie')->with('alert', 'Movie added successfully!');
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
        return redirect('/movie')->with('alert', 'Movie updated successfully!');

    }
    public function deletemovie($id)
    {
        //cari id
        $mv = Movie::find($id);
        //cek ada poster atau ga
        if($mv->poster)
        {
            Storage::disk('public')->delete($mv->poster);
        }
        //hapus data di database
        $mv->delete();

        //kembali ke halaman utama/ movie
        return redirect('/movie')->with('alert', 'Movie deleted successfully!');
    }

    public function login()
    {
        return view('login');
    }

    public function ceklogin(Request $request)
    {
        if(!Auth::attempt([
            'username'=> $request->username,
            'password'=> $request->password
        ]))
        {
            return redirect('/')->with('alert', 'Login failed! Username or password is incorrect.');
        }
        else
        {
            return redirect('/home')->with('alert', 'Login successful!');
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('alert', 'You have been logged out successfully!');
    }

    public function searchmovie(Request $request)
    {
        $search = $request->input('search');
        $mv = Movie::where('title', 'LIKE', '%' . $search . '%')->get();
        return view('searchmovie', ['key' => 'searchmovie', 'mv' => $mv, 'search' => $search]);
    }
    public function actsearchmovie(Request $request)
    {
        $search = $request->input('q');
        $mv = Movie::where('title', 'LIKE', '%' . $search . '%')->get();
        return view('actsearchmovie', ['data'=>$mv]);
    }
    public function edituser()
    {
        return view('edituser', ['key' => '']);
    }
    public function updateuser(Request $request)
    {
        if($request->password_baru == $request->konfirmasi_password)
        {
            $user = Auth::user();
            $user->password = bcrypt($request->password_baru);
            $user->save();
            return redirect('/edituser')->with('info', 'User updated successfully!');
        }
        else
        {
            return redirect('/edituser')->with('info', 'Password confirmation does not match!');
        }
    }



}
