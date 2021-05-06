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
                            Report
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
                    <div class="col ">List Of Report</div>
                </div>
                <div class="card-body">
                    <div class="datatable">
                        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Report Type</th>
                                    <th>Report Detail</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Report Type</th>
                                    <th>Report Detail</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>False Infomation</td>
                                    <td>This Chalet were so stingy. Room full of rubbish</td>
                                    <td>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark"><i
                                                data-feather="trash-2"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sexual Assault</td>
                                    <td>The Staff was so hot. Nyum</td>
                                    <td>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark"><i
                                                data-feather="trash-2"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</main>
@endsection
