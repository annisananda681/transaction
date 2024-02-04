@extends('main')

@section('container')

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

<div class="row">
    <div class="col">
        <form action="/add-data" method="post">
            @csrf
            <div class="mb-3 row">
                <label for="customer" class="col-sm-3 col-form-label">Pelanggan</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control border border-dark" name="customer" id="customer">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="product" class="col-sm-3 col-form-label">Produk</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control border border-dark" name="product" id="product">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="price" class="col-sm-3 col-form-label">Harga</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control border border-dark" name="price" id="price" value="0">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="description" class="col-sm-3 col-form-label">Keterangan</label>
                <div class="col-sm-9">
                    <textarea name="description" id="description" rows="3"></textarea>
                </div>
            </div>
            <div class="row">
                <label for="totalPajak" class="col-sm-3 col-form-label"></label>
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
