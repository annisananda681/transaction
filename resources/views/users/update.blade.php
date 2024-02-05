@extends('main')

@section('container')

<div class="container">

@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="row border border-primary-subtle rounded px-3 py-4">
    <div class="col">
        <h3 class="mb-5">Edit Data User</h3>
        <form action="/users/update-data" method="post">
            @csrf
            <input type="hidden" name="user_id" value="{{ $user->id }}">
            <div class="mb-3 row">
                <label for="username" class="col-sm-3 col-form-label">Username</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control border-primary-subtle" name="username" id="username"
                    value="{{ $user->username }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="change_password" class="col-sm-3 col-form-label"></label>
                <div class="col-sm-9">
                    <input type="checkbox" name="change_password" id="change_password"> Ganti Password ?
                </div>
            </div>
            <div class="mb-3 row">
                <label for="password" class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control border-primary-subtle" name="password" id="password">
                </div>
            </div>
            <div class="row mt-5">
                <label for="transaksi" class="col-sm-3 col-form-label"></label>
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/users/" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>
</div>

@endsection
