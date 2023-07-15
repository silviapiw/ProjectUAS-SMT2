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
    <div class="card mb-4 mt-3">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            {{ $order->tanggal }}
        </div>
        <div class="card-body">
            <form>
                <div class="form-group mb-3">
                    <label for="nama_pemesan" class="form-label">Nama Pemesan :</label>
                    <input type="text" class="form-control" name="nama_pemesan" value="{{ $order->nama_pemesan }}"
                        disabled>
                </div>
                <div class="form-group mb-3">
                    <label for="alamat_pemesan" class="form-label">Alamat Pemesan :</label>
                    <input type="text" class="form-control" name="alamat_pemesan" value="{{ $order->alamat_pemesan }}"
                        disabled>
                </div>
                <div class="form-group mb-3">
                    <label for="no_hp" class="form-label">No HP :</label>
                    <input type="number" class="form-control" name="no_hp" value="{{ $order->no_hp }}" disabled>
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" class="form-control" name="email" value="{{ $order->email }}" disabled>
                </div>
                <div class="form-group mb-3">
                    <label for="jumlah_pesanan" class="form-label">Jumlah Pesanan :</label>
                    <input type="number" class="form-control" name="jumlah_pesanan" value="{{ $order->jumlah_pesanan }}"
                        disabled>
                </div>
                <div class="form-group mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi :</label>
                    <textarea type="textarea" class="form-control" name="deskripsi" value="{{ $order->deskripsi }}" rows="3" disabled>{{ $order->deskripsi }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="product_id" class="form-label">Product :</label>
                    <input type="text" class="form-control" name="product_id" value="{{ $order->product->nama }}"
                        disabled>
                </div>
            </form>
        </div>
    </div>
@endsection
