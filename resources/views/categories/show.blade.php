@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Categories</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="/categories" class="text-secondary">Categories</a></li>
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
            ID {{ $category->id }}
        </div>
        <div class="card-body">
            <form>
                <div class="form-group mb-3">
                    <label for="nama" class="form-label">Nama :</label>
                    <input type="text" class="form-control" name="nama" value="{{ $category->nama }}" disabled>
                </div>
            </form>
        </div>
    </div>
@endsection
