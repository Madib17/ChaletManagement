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
                           {{ $chalet->name }}
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
                Location
            </div>
            <div class="card-body">
                <form action="{{ route('admin.chalet.storeLocation',$chalet) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group"><label for="address" class="control-label">Street
                                    address</label><input data-element-name="agoda-homes-street-address-input"
                                    name="address" placeholder="Text here" id="address"
                                    class="form-control pac-target-input" autocomplete="off"><span></span></div>
                                    
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group"><label for="state" class="control-label">State /
                                    Province</label><select name="state" id="state" class="form-control">
                                        @foreach ($states as $state)
                                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                                        @endforeach
                                    {{-- <option value="3260">Johor</option>
                                    <option value="3261">Kedah</option>
                                    <option value="3262">Kelantan</option>
                                    <option value="3263">Kuala Lumpur</option>
                                    <option value="3264">Labuan</option>
                                    <option value="3265">Melaka</option>
                                    <option value="3266">Negeri Sembilan</option>
                                    <option value="3267">Pahang</option>
                                    <option value="3268">Perak</option>
                                    <option value="3269">Perlis</option>
                                    <option value="3270">Penang</option>
                                    <option value="3272">Sabah</option>
                                    <option value="3273">Sarawak</option>
                                    <option value="3274">Selangor</option>
                                    <option value="3275">Terengganu</option> --}}
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group"><label for="city"
                                    class="control-label">City</label><select name="city" id="city" class="form-control">
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
                                   {{-- <option value="3269">Perlis</option>
                                     <option value="3270">Penang</option>
                                    <option value="3272">Sabah</option>
                                    <option value="3273">Sarawak</option> --}}
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group"><label for="district_id" class="control-label">District</label><select
                                    name="district_id" id="district_id" class="form-control">
                                    @foreach ($districts as $district)
                                        <option value="{{ $district->id }}">{{ $district->name }}</option>
                                    @endforeach
                                   {{--  <option value="3260">Ayer Molek</option>
                                    <option value="3261">Kampung Baru</option>
                                    <option value="3262">Taman Sri Melati</option>
                                    <option value="3263">Kandang</option>
                                    <option value="3264">Bandar Melaka </option>
                                    <option value="3265">Semabok</option> --}}
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group"><label for="poscode" class="control-label">ZIP /
                                    Postal
                                    code
                                    <small>(optional)</small></label><input
                                    data-element-name="agoda-homes-zip-post-code-input" name="poscode"
                                    placeholder="#####" maxlength="13" id="poscode" class="form-control"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success float-right" type="submit">Save & Next</button>
                    </div>
            </div>
        </div>
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
</main>
@endsection
