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
                Accommodation
            </div>
            <div class="card-body">
                <div class="sbp-preview">
                    <div class="sbp-preview-content">
                        <form action="{{ route('admin.chalet.storeAccommodation',$chalets) }}" method="POST">
                            @csrf
                            <div class="row">
                                @foreach ($accommodations as $accommodation)
                                
                                <div class="custom-control custom-checkbox ml-4">
                                    <input class="custom-control-input" id="accommodation[{{ $accommodation->id }}]"  value="{{ $accommodation->id }}" type="checkbox">
                                    <label class="custom-control-label" for="accommodation[{{ $accommodation->id }}]">{{ $accommodation->name }}</label>
                                </div>
                                @endforeach
                                </div>
                            </div>
                            <div class="row">
                                <button class="btn btn-success float-right" type="submit">Save & Next</button>
                            </div>
                        </form>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
