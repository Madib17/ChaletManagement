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
                            Policy
                        </h1>
                        <div class="page-header-subtitle">An extended version of the DataTables library, customized for
                            SB Admin Pro</div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container mt-n10">
        <div class="card mb-4">
            <div class="card-header">
                Add Policy
            </div>
            <div class="card-body">
                <form action="{{ route('admin.chalet.storePhoto',$chalets) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" name="photo" id="photo" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success float-right" type="submit">Finish</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection