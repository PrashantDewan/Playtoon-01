@extends('admin.layout.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Rhymes</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Rhymes</li>
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
                <div class='alert alert-default-success' id='time'>
                    {{ session('message') }}
                </div>
            @endif
            <div class="card-header">
                <h3 class="card-title">Rhymes List</h3>
                <div class="card-tools">
                    <a href="{{ route('admin.rhymes.create') }}" class="btn btn-primary">Create Rhyme</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Video</th>
                            <th>Category</th>
                            <th>Rhyme Level</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rhymes as $rhyme)
                            <tr>
                                <td>{{ $rhyme->id }}</td>
                                <td>{{ $rhyme->title }}</td>
                                <td>{{ $rhyme->author }}</td>
                                <td>
                                    <video src="{{ asset($rhyme->rhyme) }}" width="50"></video>
                                </td>
                                <td>{{ $rhyme->category['name'] }}</td>
                                <td>{{ $rhyme->rhyme_level['name'] }}</td>
                                <td>
                                    @if ($rhyme->status == 1)
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.rhymes.add.video', $rhyme->id) }}"
                                        class="btn btn-secondary btn-sm"><i class="fa-sharp fa-solid fa-square-plus"></i></a>

                                    <a href="{{ route('admin.rhymes.change.status', $rhyme->id) }}"
                                        class="btn btn-success btn-sm"><i class="fa-solid fa-repeat"></i></a>

                                    <a href="{{ route('admin.rhymes.edit', $rhyme->id) }}" class="btn btn-primary btn-sm"><i
                                            class="fa-sharp fa-solid fa-pen-to-square"></i></a>

                                    <a href="{{ route('admin.rhymes.delete', $rhyme->id) }}"
                                        class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>

                                   

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.content -->
@endsection
