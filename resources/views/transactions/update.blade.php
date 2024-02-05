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
        <h3 class="mb-5">Edit Data Transaksi</h3>
        <form action="/transactions/update-data" method="post">
            @csrf
            <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
            <div class="mb-3 row">
                <label for="customer" class="col-sm-3 col-form-label">Nama Pelanggan</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control border-primary-subtle" name="customer" id="customer"
                    value="{{ $transaction->customer }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="product" class="col-sm-3 col-form-label">Nama Produk</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control border-primary-subtle" name="product" id="product"
                    value="{{ $transaction->product }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="price" class="col-sm-3 col-form-label">Total Harga</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control border-primary-subtle" name="price" id="price"
                    value="{{ $transaction->price }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="description" class="col-sm-3 col-form-label">Keterangan</label>
                <div class="col-sm-9">
                    <textarea class="form-control border-primary-subtle" name="description"
                    id="description" rows="3">{{ $transaction->description }}</textarea>
                </div>
            </div>
            <div class="row mt-5">
                <label for="transaksi" class="col-sm-3 col-form-label"></label>
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>
</div>

@endsection
