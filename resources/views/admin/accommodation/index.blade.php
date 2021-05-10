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
                            Accommodation
                        </h1>
                        <div class="page-header-subtitle">An extended version of the DataTables library, customized for
                            SB Admin Pro</div>
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
                    <div class="col ">List Of Accommodation</div>
                    <div class="col "><a href="{{ route('admin.accommodation.create') }}"><button
                                class="btn btn-primary float-right">Add Accommodation</button></a></div>
                </div>
            </div>
            <div class="card-body">
                <div class="datatable">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Accommodation Name</th>
                                <th>Type</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Accommodation Name</th>
                                <th>Type</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($accommodations as $accommodation)
                            <tr>
                                <td>{{ $accommodation->name }}</td>
                                <td>{{ $accommodation->type }}</td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i
                                            data-feather="more-vertical"></i></button>
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
