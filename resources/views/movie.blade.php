@extends('layouts.main')
@section('title', 'Movie')
@section('content')
    <div class="container-fluid pt-3">
        <div class="card">
            <div class="card-header">
                <a href="/movie/addmovie" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Movie</a>
            </div>
              <div class="card-body">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>imDB</th>
                            <th>Title</th>
                            <th>Year</th>
                            <th>Genre</th>
                            <th>Poster</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mv as $idx=>$m)
                        <tr>
                            <td>{{$idx+1}}</td>
                            <td>{{$m->imBD}}</td>
                            <td>{{$m->title}}</td>
                            <td>{{$m->year}}</td>
                            <td>{{$m->genre}}</td>
                            <td>
                                @if($m->poster)
                                    <img src="{{ asset('storage/' . $m->poster) }}" alt="{{$m->poster}}" style="width: 100px;">
                                @else
                                    <img src="https://png.pngtree.com/png-clipart/20230917/original/pngtree-no-image-available-icon-flatvector-illustration-thumbnail-graphic-illustration-vector-png-image_12323920.png"
                                    alt="No Image" style="width: 100px;">
                                @endif
                            </td>
                            <td>
                                <a href="/movie/editmovie/{{$m->id}}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection()
