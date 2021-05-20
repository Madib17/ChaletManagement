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
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container mt-n10">
        <div class="card mb-4">
            <div class="card-header">
                View Policy
            </div>
            <div class="card-body">
                <form action="{{ route('admin.policy.store',$chalet) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input class="form-control" name="title" id="title" type="text" placeholder="Customer Policy" value="{{ $policy->title }}"/>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="10">{{ $policy->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <a href="{{ route('admin.chalet.show',$chalet) }}"><button class="btn btn-primary float-left" type="button">Back</button></a>
                        <button class="btn btn-danger float-right" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection