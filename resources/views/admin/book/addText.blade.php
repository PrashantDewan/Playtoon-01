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
    <div class="card">
        <div class="card-body">
            <h3>
                Add Text
            </h3>
            <form action="{{route('admin.book.store.content',$book->id)}}" method="post">
                @csrf
                <div class="form">
                    <textarea name="booktext" id="tinyeditor" cols="30" rows="15">
                    {{$content}}
                    </textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4 ">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.content -->

@endsection@extends('admin.layout.main')
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
    <div class="card">
        <div class="card-body">
            <h3>
                Add Text
            </h3>
            <form action="{{route('admin.book.store.content',$book->id)}}" method="post">
                @csrf
                <div class="form">
                    <textarea name="booktext" id="tinyeditor" cols="30" rows="15">
                    {{$content}}
                    </textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4 ">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.content -->

@endsection