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
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card mb-4 mt-3">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            {{ $product->kode }}
        </div>
        <div class="card-body">
            <form>
                <div class="form-group mb-3">
                    <label for="nama" class="form-label">Nama :</label>
                    <input type="text" class="form-control" name="nama" value="{{ $product->nama }}" disabled>
                </div>
                <div class="form-group mb-3">
                    <label for="harga" class="form-label">Harga :</label>
                    <input type="text" class="form-control" name="harga" value="{{ $product->harga_jual }}" disabled>
                </div>
                <div class="form-group mb-3">
                    <label for="stok" class="form-label">Stock :</label>
                    <input type="text" class="form-control" name="stok" value="{{ $product->stok }}" disabled>
                </div>
                <div class="form-group mb-3">
                    <label for="category_id" class="form-label">Category :</label>
                    <input type="text" class="form-control" name="category_id" value="{{ $product->category->nama }}"
                        disabled>
                </div>
            </form>
        </div>
    </div>
@endsection
