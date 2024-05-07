@extends('admin.layout.main')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Books</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.books.create') }}" class="btn btn-primary">Add Book</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($books as $book)
                                <tr>
                                    <td>{{ $book->id }}</td>
                                    <td>{{ $book->name }}</td>
                                    <td>
                                        @if($book->image)
                                        <img src="{{ asset($book->image) }}" alt="Book Image" class="book-image" width="70px" />
                                        @endif
                                    </td>
                                    <td><span class="badge badge-dark">{{$book->type}}</span></td>
                                    <td><span class="badge badge-info">{{$book->status}}</span></td>
                                    <td>
                                        <a href="{{ route('admin.books.edit', $book->id) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('admin.books.changeStatus', $book->id) }}" class="btn btn-secondary">Change Status</a>
                                        <a href="{{ route('admin.books.addResource', $book->id) }}" class="btn btn-success">Add Resources</a>
                                        <a href="{{ route('admin.books.delete', $book->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this book?')">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection