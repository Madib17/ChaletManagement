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
                        <form action="{{ route('admin.chalet.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="custom-control custom-checkbox custom-control-solid">
                                        <input class="custom-control-input" id="customCheckSolid1" name="accommodation[]" type="checkbox">
                                        <label class="custom-control-label" for="customCheckSolid1">Air conditioning</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="custom-control custom-checkbox custom-control-solid">
                                        <input class="custom-control-input" id="customCheckSolid1" name="accommodation[]" type="checkbox">
                                        <label class="custom-control-label" for="customCheckSolid1">Air conditioning</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="custom-control custom-checkbox custom-control-solid">
                                        <input class="custom-control-input" id="customCheckSolid1" name="accommodation[]" type="checkbox">
                                        <label class="custom-control-label" for="customCheckSolid1">Air conditioning</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="custom-control custom-checkbox custom-control-solid">
                                        <input class="custom-control-input" id="customCheckSolid1" name="accommodation[]" type="checkbox">
                                        <label class="custom-control-label" for="customCheckSolid1">Air conditioning</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="custom-control custom-checkbox custom-control-solid">
                                        <input class="custom-control-input" id="customCheckSolid1" name="accommodation[]" type="checkbox">
                                        <label class="custom-control-label" for="customCheckSolid1">Air conditioning</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label class="amenity amenity-25 checkbox-inline" title="">
                                        <input data-element-name="agoda-homes-recommended-amenities-selector"
                                            data-element-value="25" type="checkbox"><span class="checkbox-ui"><i
                                                class="ficon"></i></span>Air conditioning
                                    </label>
                                </div><div class="col">
                                    <label class="amenity amenity-25 checkbox-inline" title="">
                                        <input data-element-name="agoda-homes-recommended-amenities-selector"
                                            data-element-value="25" type="checkbox"><span class="checkbox-ui"><i
                                                class="ficon"></i></span>Air conditioning
                                    </label>
                                </div><div class="col">
                                    <label class="amenity amenity-25 checkbox-inline" title="">
                                        <input data-element-name="agoda-homes-recommended-amenities-selector"
                                            data-element-value="25" type="checkbox"><span class="checkbox-ui"><i
                                                class="ficon"></i></span>Air conditioning
                                    </label>
                                </div><div class="col">
                                    <label class="amenity amenity-25 checkbox-inline" title="">
                                        <input data-element-name="agoda-homes-recommended-amenities-selector"
                                            data-element-value="25" type="checkbox"><span class="checkbox-ui"><i
                                                class="ficon"></i></span>Air conditioning
                                    </label>
                                </div><div class="col">
                                    <label class="amenity amenity-25 checkbox-inline" title="">
                                        <input data-element-name="agoda-homes-recommended-amenities-selector"
                                            data-element-value="25" type="checkbox"><span class="checkbox-ui"><i
                                                class="ficon"></i></span>Air conditioning
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
