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
                    <div class="col ">List Of Report</div>
                </div>
                <div class="card-body">
                    <div class="datatable">
                        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Report ID</th>
                                    <th>Report Type</th>
                                    <th>Report Detail</th>
                                    <th>Report Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Type</th>
                                    <th>Chalet</th>
                                    <th>Report Detail</th>
                                    <th>Report Date</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($reports as $report)
                                <tr>
                                    <td>{{ Str::title($report->title->title) }}</td>
                                    <td>{{ $report->review->chalet->name }}</td>
                                    <td>{{ $report->review->detail }}</td>
                                    @if (!is_null($report->created_at))
                                    <td>{{ \Carbon\Carbon::parse($report->created_at)->diffForHumans() }}</td> 
                                    @endif
                                    <td>
                                        <a href="{{ route('admin.report.destroy', $report->id) }}"><button class="btn btn-datatable btn-icon btn-transparent-dark" ><i
                                                data-feather="trash-2"></i></button></a>
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
