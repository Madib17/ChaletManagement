@extends('admin.layouts.main')

@section('content')
<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="filter"></i></div>
                            User
                        </h1>
                        {{-- <div class="page-header-subtitle">An extended version of the DataTables library, customized for
                            SB Admin Pro</div> --}}
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container mt-n10">
        <div class="card mb-4">
            <div class="card-header">
                <div class="row">
                    <div class="col ">List Of Admin</div>
                    <div class="col "><a href="{{ route('admin.user.add') }}"><button class="btn btn-primary float-right">Add User</button></a></div>
                </div>
            </div>
            <div class="card-body">
                <div class="datatable">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Type</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Admin Name</th>
                                <th>Admin Email</th>
                                <th>Type</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                            <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ Str::ucfirst($user->type) }}</td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i
                                            data-feather="trash-2"></i></button>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
