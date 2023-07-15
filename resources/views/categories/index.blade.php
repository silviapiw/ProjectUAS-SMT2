@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Categories</h1>
    <div class="d-flex justify-content-between mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="/categories" class="text-secondary">Categories</a></li>
        </ol>
        <a href="/categories/create">
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
            Categories Data
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Name Category</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $category->nama }}</td>
                            <td>
                                <div class="d-flex justify-content-evenly">
                                    <a href="/categories/{{ $category->id }}/show" class="btn btn-sm m-1 btn-primary">
                                        Show</a>
                                    <a href="/categories/{{ $category->id }}/edit" class="btn btn-sm m-1 btn-warning">
                                        Edit</a>
                                    <form action="/categories/{{ $category->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm m-1 btn-danger"
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
