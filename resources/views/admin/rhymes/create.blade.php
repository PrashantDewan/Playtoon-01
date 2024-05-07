@extends('admin.layout.main')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Create Rhyme</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.rhymes.index') }}">Rhymes</a></li>
                    <li class="breadcrumb-item active">Create</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.rhymes.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" id="author" name="author" class="form-control">
                </div>
                <div class="form-group">
                    <label for="image">Image (Thumbnail)</label>
                    <input type="file" id="image" name="image" class="form-control-file" accept="image/*" required>
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select id="category" name="category_id" class="form-control" required>
                        <option value="">Select a category</option>
                        <!-- Loop through categories to populate options -->
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="rhyme_level">Rhyme Level</label>
                    <select id="rhyme_level" name="rhyme_level_id" class="form-control" required>
                        <option value="">Select a rhyme level</option>
                        <!-- Loop through rhyme levels to populate options -->
                        @foreach($rhyme_levels as $level)
                        <option value="{{ $level->id }}">{{ $level->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="status" name="status" class="form-check-input" value="1" checked>
                    <label for="status" class="form-check-label">Status</label>
                </div>
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.content -->
@endsection