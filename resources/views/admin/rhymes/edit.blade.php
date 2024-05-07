@extends('admin.layout.main')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Rhyme</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.rhymes.index') }}">Rhymes</a></li>
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
            <form action="{{ route('admin.rhymes.update', $rhyme->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{ $rhyme->title }}" required>
                </div>
                <div class="form-group">
                    <label for="rhyme">Rhyme (Video)</label>
                    <input type="file" id="rhyme" name="rhyme" class="form-control-file" accept="video/*">
                    <small class="text-muted">Upload a new video file if you want to replace the existing one.</small>
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" id="author" name="author" class="form-control" value="{{ $rhyme->author }}">
                </div>
                <div class="form-group">
                    <label for="image">Image (Thumbnail)</label>
                    <input type="file" id="image" name="image" class="form-control-file" accept="image/*">
                    <small class="text-muted">Upload a new image file if you want to replace the existing one.</small>
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select id="category" name="category_id" class="form-control" required>
                        <option value="">Select a category</option>
                        <!-- Loop through categories to populate options -->
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" @if($category->id === $rhyme->category_id) selected @endif>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="rhyme_level">Rhyme Level</label>
                    <select id="rhyme_level" name="rhyme_level_id" class="form-control" required>
                        <option value="">Select a rhyme level</option>
                        <!-- Loop through rhyme levels to populate options -->
                        @foreach($rhyme_levels as $level)
                        <option value="{{ $level->id }}" @if($level->id === $rhyme->id) selected @endif>{{ $level->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="status" name="status" class="form-check-input" value="1" @if($rhyme->status === 1) checked @endif>
                    <label for="status" class="form-check-label">Status</label>
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
