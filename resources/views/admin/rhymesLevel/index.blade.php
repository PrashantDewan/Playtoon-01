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
        <div class="card">
            @if(session('message'))
            <div class="alert alert-success" id="time">
                {{ session('message') }}
            </div>
            @endif
            <div class="card-header">
                <h3 class="card-title">Rhyme Levels</h3>
                <div class="card-tools">
                    <a href="{{ route('admin.rhymes.level.create') }}" class="btn btn-primary">Add New Level</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rhymesLevels as $level)
                        <tr>
                            <td>{{ $level->id }}</td>
                            <td>{{ $level->name }}</td>
                            <td>{{ $level->description }}</td>
                            <td>
                                <a href="{{ route('admin.rhymes.level.edit', $level->id) }}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{route('admin.rhymes.level.delete',$level->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                               
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->


@endsection
