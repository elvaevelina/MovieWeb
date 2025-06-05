@extends('layouts.main')
@section('title', 'Edit Password')
@section('content')
    <div class="card mt-4">
        <div class="card-body">
            @if (session("info"))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('info')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <form action="/updateuser" method="POST">
                @csrf
                <div class="form-group">
                    <label>Password Baru</label>
                    <input type="password" name="password_baru" class="form-control" placeholder="Masukkan Password Baru" required>
                </div>
                <div class="form-group">
                    <label>Konfirmasi Password</label>
                    <input type="password" name="konfirmasi_password" class="form-control" placeholder="Masukkan Password Baru" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Update Password</button>
                </div>
            </form>
        </div>
    </div>
@endsection
