@extends('layouts.main')
@section('title', 'Form Movie')
@section('content')
    <div class="container-fluid pt-4">
        <div class="card">
            <div class="card-header">
                <h5>Form Movie</h5>
            </div>
            <div class="card-body">
                <form action="/update/{{$mv->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>imBD</label>
                        <input type="number" name="imBD" class="form-control" value="{{$mv->imBD}}" required>
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="{{$mv->title}}" required>
                    </div>
                    <div class="form-group">
                        <label>Year</label>
                        <input type="year" min="1900" max="2100" name="year" class="form-control" value="{{$mv->year}}" required>
                    </div>
                    <div class="form-group">
                        <label>Genre</label>
                        <select name="genre" class="form-control">
                            <option value="0">Pilih Genre</option>
                            <option value="Komedi"{{($mv->genre=='Komedi')? ' selected':''}}>Komedi</option>
                            <option value="Horror"{{($mv->genre=='Horror')? ' selected':''}}>Horror</option>
                            <option value="Triler"{{($mv->genre=='Triler')? ' selected':''}}>Triler</option>
                            <option value="Fiksi"{{($mv->genre=='Fiksi')? ' selected':''}}>Fiksi</option>
                            <option value="Anime"{{($mv->genre=='Anime')? ' selected':''}}>Anime</option>
                            <option value="Romantis"{{($mv->genre=='Romantis')? ' selected':''}}>Romantis</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Poster</label>
                        <input type="file" accept="image/*" name="poster" class="form-control-file">
                    </div>
                    <div class="form-group">
                        @if($mv->poster)
                            <img src="{{ asset('storage/' . $mv->poster) }}" alt="{{$mv->poster}}" style="width: 100px;">
                        @else
                            <img src="https://png.pngtree.com/png-clipart/20230917/original/pngtree-no-image-available-icon-flatvector-illustration-thumbnail-graphic-illustration-vector-png-image_12323920.png"
                            alt="No Image" style="width: 100px;">
                        @endif
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection()
