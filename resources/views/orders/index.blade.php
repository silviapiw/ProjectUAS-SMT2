@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Orders</h1>
    <div class="d-flex justify-content-between mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="/orders" class="text-secondary">Orders</a></li>
        </ol>
        <a href="/orders/create">
            <button class="btn btn-success" type="submit">Create Data</button>
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Orders Data
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama Pemesan</th>
                        <th>Alamat Pemesan</th>
                        <th>No HP</th>
                        <th>Email</th>
                        <th>Jumlah Pesanan</th>
                        <th>Deskripsi</th>
                        <th>Product</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama Pemesan</th>
                        <th>Alamat Pemesan</th>
                        <th>No HP</th>
                        <th>Email</th>
                        <th>Jumlah Pesanan</th>
                        <th>Deskripsi</th>
                        <th>Product</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $order->tanggal }}</td>
                            <td>{{ $order->nama_pemesan }}</td>
                            <td>{{ $order->alamat_pemesan }}</td>
                            <td>{{ $order->no_hp }}</td>
                            <td>{{ $order->email }}</td>
                            <td>{{ $order->jumlah_pesanan }}</td>
                            <td>{{ $order->deskripsi }}</td>
                            <td>{{ $order->product->nama }}</td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    <a href="/orders/{{ $order->id }}/show" class="btn m-1 btn-primary">
                                        Show</a>
                                    <a href="/orders/{{ $order->id }}/edit" class="btn m-1 btn-warning">
                                        Edit</a>
                                    <form action="/orders/{{ $order->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn m-1 btn-danger"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
