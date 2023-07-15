@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Orders</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="/orders" class="text-secondary">Orders</a></li>
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
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit Data
        </div>
        <div class="card-body">
            <form method="POST" action="/orders/{{ $order->id }}">
                @csrf
                @method('PUT')

                <div class="form-group my-1">
                    <label for="tanggal">Tanggal:</label>
                    <input type="date" id="tanggal" class="form-control" name="tanggal" value="{{ $order->tanggal }}">
                </div>
                <div class="form-group my-1">
                    <label for="nama_pemesan">Nama Pemesan:</label>
                    <input type="text" id="nama_pemesan" class="form-control" name="nama_pemesan"
                        value="{{ $order->nama_pemesan }}">
                </div>
                <div class="form-group my-1">
                    <label for="alamat_pemesan">Alamat Pemesan:</label>
                    <input type="text" id="alamat_pemesan" class="form-control" name="alamat_pemesan"
                        value="{{ $order->alamat_pemesan }}">
                </div>
                <div class="form-group my-1">
                    <label for="no_hp">No HP:</label>
                    <input type="number" id="no_hp" class="form-control" name="no_hp" value="{{ $order->no_hp }}">
                </div>
                <div class="form-group my-1">
                    <label for="email">Email:</label>
                    <input type="email" id="email" class="form-control" name="email" value="{{ $order->email }}">
                </div>
                <div class="form-group my-1">
                    <label for="jumlah_pesanan">Jumlah Pesanan:</label>
                    <input type="number" id="jumlah_pesanan" class="form-control" name="jumlah_pesanan"
                        value="{{ $order->jumlah_pesanan }}">
                </div>
                <div class="form-group my-1">
                    <label for="deskripsi">Deskripsi:</label>
                    <textarea type="textarea" id="deskripsi" class="form-control" name="deskripsi" rows="3"
                        value="{{ $order->deskripsi }}">{{ $order->deskripsi }}</textarea>
                </div>
                <div class="form-group my-1">
                    <label for="product_id">Product :</label>
                    <select id="product_id" class="form-select" name="product_id">
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Add</button>
            </form>
        </div>
    </div>
@endsection
