@extends('admin.layout.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create Audio</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="">Audio</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="card">
            @if (session('message'))
                <div class='alert alert-default-success' id="time">
                    {{ session('message') }}
                </div>
            @endif
            <div class="card-body">

                <form action="{{ route('admin.audio.update', $audio->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" class="form-control" value="{{ $audio->title }}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="image">Image (Thumbnail)</label>
                        <input type="file" id="image" name="image" class="form-control-file" accept="image/*">
                    </div>

                    <div class="form-group">
                        <label for="audio">Audio</label>
                        <input type="file" id="audio" name="audio" class="form-control-file" accept="audio/*">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control" placeholder="{{ $audio->description }}" required></textarea>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.content -->
    
@endsection
