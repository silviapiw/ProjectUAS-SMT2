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
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit Data
        </div>
        <div class="card-body">
            <form method="POST" action="/categories/{{ $category->id }}">
                @csrf
                @method('PUT')


                <div class="form-group my-3">
                    <label for="nama">Category Name:</label>
                    <input class="form-control" type="text" id="nama" name="nama" value="{{ $category->nama }}">
                </div>

                <input type="submit" value="Update Category" class="btn btn-primary my-2">
            </form>
        </div>
    </div>
@endsection
