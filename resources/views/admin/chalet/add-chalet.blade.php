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
                            Chalet
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
                Basic Information
            </div>
            <div class="card-body">
                <form action="{{ route('admin.chalet.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Chalet Name</label>
                        <input class="form-control" name="name" id="name" type="text" placeholder="Mawar Chalet" />
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="5"></textarea>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input class="form-control" name="phone" id="phone" type="text" placeholder="06-321643" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" name="email" id="email" type="text" placeholder="chalet@med.com" />
                            </div>
                        
                        </div>

                    </div>
                    <div class="form-group">
                        <button class="btn btn-success float-right" type="submit">Save & Next</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection