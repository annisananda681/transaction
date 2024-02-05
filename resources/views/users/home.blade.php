@extends('main')

@section('container')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data User</h1>
    <div>
        <a href="/users/add" class="btn btn-primary">Tambah Data</a>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" style="width:100%">
                <caption></caption>
                <thead>
                    <tr>
                        <th class="text-center" id="thCustomer" style="width:60%">Username</th>
                        <th class="text-center" id="thActionHeader" style="width:40%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $data)
                        <tr class="text-center">
                            <td>{{ $data->username }}</td>
                            <td>
                                <a href="/users/update/{{ $data->id }}" class="btn btn-primary mb-1">Edit</a>
                                <form method="post" class="d-inline"
                                    title="Delete" action="/users/delete/{{ $data->id }}">
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
