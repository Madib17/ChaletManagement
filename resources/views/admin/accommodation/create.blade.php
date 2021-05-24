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
                        {{-- <div class="page-header-subtitle">An extended version of the DataTables library, customized for
                            SB Admin Pro</div> --}}
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container mt-n10">
        <div class="card mb-4">
            <div class="card-header">
                <div class="col ">Add Accommodation</div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.accommodation.store') }}" method="POST">
                    <div class="form-group">
                        @csrf
                        <label for="name">Accommodation Name</label>
                        <input class="form-control" name="name" id="name" type="text" placeholder="Parking , Wifi" />
                    </div>
                    <div class="form-group">
                        <label for="type" >Type</label>
                        <select name="type" id="type" class="form-control">
                            <option value="standard">Amenity</option>
                            <option value="access">Access</option>
                            <option value="kitchen">Kitchen</option>
                            <option value="bathroom">Bathroom</option>
                            <option value="outdoor">Outdoor</option>
                            <option value="entertainment">Entertainment</option>
                            <option value="family">Family</option>
                            <option value="safety">Safety</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Add Accommodation</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
