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
                        @if(session('message'))
                        <div class='alert alert-default-success' id="time">
                            {{ session('message') }}
                        </div>
                        @endif
                        <div class="card-header">
                            <h3 class="card-title ">Audio</h3>
                            <div class="card-tools">
                                <a href="{{ route('admin.audio.create') }}" class="btn btn-primary">Add Audio</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Audio</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($audio as $audio)
                                        <tr>
                                            <td>{{ $audio->id }}</td>
                                            <td>{{ $audio->title }}</td>
                                            <td>
                                                @if ($audio->image)
                                                    <img src="/images/audio/{{ $audio->image }}" alt="Thumbnail Image"
                                                        class="book-image" width="80" />
                                                @endif
                                            </td>

                                            <td>
                                                <audio controls > 
                                                <source src="/books/audio/{{  $audio->audio  }}" type="audio/ogg">
                                                        Your browser does not support this element
                                                    </audio>
                                            </td>
                                            <td>
                                                @if($audio->status == "active")
                                                <span class="badge badge-success">Active</span>
                                                @else
                                                <span class="badge badge-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>{{ $audio->description }}</td>
                                            <td>
                                                <a href="{{ route('admin.audio.changeStatus', $audio->id) }}"
                                                    class="btn btn-secondary">Change Status</a>
                                                <a href="{{ route('admin.audio.edit',$audio->id) }}" class="btn btn-primary"><i class="fa-sharp fa-solid fa-pen-to-square"></i></a>
                                                
                                                <a href="{{ route('admin.audio.delete', $audio->id) }}"
                                                    class="btn btn-danger"
                                                    onclick="return confirm('Are you sure you want to delete this audio?')"><i class="fa-solid fa-trash"></i></a>
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
