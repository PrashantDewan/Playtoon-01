@extends('admin.layout.main')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Subscription Plans</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Subscription Plans</li>
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
                        <h3 class="card-title">Subscription Plans List</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.create.subscription.plan') }}" class="btn btn-primary">Add New</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Currency</th>
                                    <th>Trial Period (Days)</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subscriptionPlans as $plan)
                                <tr>
                                    <td>{{ $plan->id }}</td>
                                    <td>{{ $plan->name }}</td>
                                    <td>{!! $plan->description !!}</td>
                                    <td>{{ $plan->price }}</td>
                                    <td>{{ $plan->currency }}</td>
                                    <td>{{ $plan->trial_period_days }}</td>
                                    <td>{{ $plan->status }}</td>
                                    <td>
                                        <a href="{{ route('admin.edit.subscription.plan', $plan->id) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('admin.delete.subscription.plan', $plan->id) }}" class="btn btn-danger">Delete</a>
                                        <a href="{{ route('admin.status.subscription.plan', $plan->id) }}" class="btn btn-success">Change Status</a>
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
