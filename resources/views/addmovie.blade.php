@extends('layouts.main')
@section('title', 'Form Movie')
@section('content')
    <div class="container-fluid pt-4">
        <div class="card">
            <div class="card-header">
                <h5>Form Movie</h5>
            </div>
            <div class="card-body">
                <form action="/save" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>imBD</label>
                        <input type="number" name="imBD" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Year</label>
                        <input type="year" min="1900" max="2100" name="year" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Genre</label>
                        <select name="genre" class="form-control">
                            <option value="0">Pilih Genre</option>
                            <option value="Komedi">Komedi</option>
                            <option value="Horror">Horror</option>
                            <option value="Triler">Triler</option>
                            <option value="Fiksi">Fiksi</option>
                            <option value="Anime">Anime</option>
                            <option value="Romantis">Romantis</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Poster</label>
                        <input type="file" accept="image/*" name="poster" class="form-control-file">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection()
