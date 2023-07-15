@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Products</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="/products" class="text-secondary">Products</a></li>
        </ol>
    </div>
    @if ($errors->any())
        <div class="alert alert-warning">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Products Data
        </div>
        <div class="card-body">
            <form enctype="multipart/form-data" method="POST" action="/products">
                @csrf
                <div class="form-group my-1">
                    <label for="kode">Kode:</label>
                    <input type="text" id="kode" class="form-control" name="kode">
                </div>
                <div class="form-group my-1">
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" class="form-control" name="nama">
                </div>
                <div class="form-group my-1">
                    <label for="harga_jual">Harga:</label>
                    <input type="number" id="harga_jual" class="form-control" name="harga_jual">
                </div>
                <div class="form-group my-1">
                    <label for="stok">Stock:</label>
                    <input type="number" id="stok" class="form-control" name="stok">
                </div>
                <div class="form-group my-1">
                    <label for="category_id">Category Product:</label>
                    <select id="category_id" class="form-select" name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Add</button>
            </form>
        </div>
    </div>
@endsection
