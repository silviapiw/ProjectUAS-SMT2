@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Products</h1>
    <div class="d-flex justify-content-between mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="/products" class="text-secondary">Products</a></li>
        </ol>
        <a href="/products/create">
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
            Products Data
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Stock</th>
                        <th>Category Product</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Stock</th>
                        <th>Category Product</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $product->kode }}</td>
                            <td>{{ $product->nama }}</td>
                            <td>{{ $product->harga_jual }}</td>
                            <td>{{ $product->stok }}</td>
                            <td>{{ $product->category->nama }}</td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    <a href="/products/{{ $product->id }}/show" class="btn btn-sm btn-primary">
                                        Show</a>
                                    <a href="/products/{{ $product->id }}/edit" class="btn btn-sm btn-warning">
                                        Edit</a>
                                    <form action="/products/{{ $product->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
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
