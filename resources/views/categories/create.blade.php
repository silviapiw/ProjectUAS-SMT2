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
            Categories
        </div>
        <div class="card-body">
            <form method="POST" action="/categories">
                @csrf
                <div class="form-group my-2">
                    <label for="nama">Category Product:</label>
                    <input type="text" id="nama" class="form-control" name="nama">
                </div>
                <button class="btn btn-primary" type="submit">Add</button>
            </form>
        </div>
    </div>
@endsection
