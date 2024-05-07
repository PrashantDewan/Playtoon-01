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
                    <li class="breadcrumb-item active">Dashboard </li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card p-4">
                    <h2 class="card-title mb-4">Add Book Page</h2>

                    <form action="{{route('admin.book.resource.page',$book->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="page_number" class="form-label">Page Number:</label>
                            <input type="number" class="form-control" name="page_number" value="1" required>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image:</label>
                            <input type="file" class="form-control" name="image">
                        </div>

                        <button type="submit" class="btn btn-primary">Add Page</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="card p-4">
            <h2 class="card-title mb-4">Book Page Cards</h2>
            <div class="row">
                @foreach($bookPages as $bookPage)
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body text-center">
                            <h5 class="card-title">Page Number: {{$bookPage->page_number}}</h5>
                            <div class="position-relative">
                                @if($bookPage->image)
                                <img src="{{asset($bookPage->image)}}" alt="Book Page Image" class="img-fluid">
                                <div class="position-center top-50 start-50 translate-middl p-2">
                                    <a href="#" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                    <a href="{{route('admin.books.delete.page',$bookPage->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                </div>
                                @else
                                <p>No image available</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- /.content -->

@endsection