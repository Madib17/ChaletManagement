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
                            Photo
                        </h1>
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
                <form action="{{ route('admin.photo.store',$chalet) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="photo" class="form-label">Select Photo:</label>
                        <input class="form-control" type="file" name="photo" id="photo" multiple>
                      </div>
                    <div class="form-group">
                        <a href="{{ route('admin.chalet.show',$chalet) }}"><button class="btn btn-primary float-left" type="submit">Back</button></a>
                        <button class="btn btn-success float-right" type="submit">Add Photo</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection