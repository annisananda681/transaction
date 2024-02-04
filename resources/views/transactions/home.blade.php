@extends('main')

@section('container')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Transaksi</h1>
    <div>
        <a href="/add-page" class="btn btn-primary">Tambah Data</a>
    </div>
</div>

<!-- DataTales -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" style="width:100%">
                <caption></caption>
                <thead>
                    <tr>
                        <th class="text-center" id="thCustomer" style="width:20%">Customer</th>
                        <th class="text-center" id="thProduct" style="width:20%">Product</th>
                        <th class="text-center" id="thDescription" style="width:20%">Description</th>
                        <th class="text-center" id="thPrice" style="width:15%">Price</th>
                        <th class="text-center" id="thActionHeader" style="width:25%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $data)

                        <tr class="text-center">
                            <td>{{ $data->customer }}</td>
                            <td>{{ $data->product }}</td>
                            <td>{{ $data->description }}</td>
                            <td>Rp{{ number_format($data->price, 0, ',', '.') }}</td>
                            <td>
                                <a href="/edit-page/{{ $data->id }}" class="btn btn-info mb-1">Edit</a>
                                <form method="post" class="d-inline"
                                    title="Delete" action="/delete/{{ $data->id }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
