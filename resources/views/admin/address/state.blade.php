@extends('admin.layouts.main')

@section('content')
<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="file"></i></div>
                            Address
                        </h1>
                        {{-- <div class="page-header-subtitle">Use this blank page as a starting point for creating new pages
                            inside your project!</div>
                    </div>
                    <div class="col-12 col-xl-auto mt-4">Optional page header content</div> --}}
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container mt-n10">
        <div class="card">
            <div class="card-header">State Form</div>
            <div class="card-body">
                <div class="sbp-preview">
                    <div class="sbp-preview-content">
                        <form action="{{ route('admin.address.storeState') }}" method="POST">
                            <div class="form-group">
                                @csrf
                                <label for="state">State Name</label>
                                <input class="form-control" name="name" id="name" type="text" placeholder="Melaka , Selangor" />
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success" type="submit">Add State</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
