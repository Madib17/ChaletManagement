@extends('admin.layouts.main')

@section('content')
<main>
    <header class="page-header page-header-light bg-light mb-0">
        <div class="container">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="home"></i></div>
                            Chalet Information
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container">
        <div class="card">
            <div class="card-header">Basic Information</div>
            <div class="card-body">
                <form action="{{ route('admin.chalet.update',$chalet) }}" method="POST" class="form-group">
                    @csrf
                <div class="row">
                    <div class="col">
                        <p class="h4">Name</p>
                        <input type="text" name="name" value="{{ $chalet->name }}" class="form-control">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <p class="h4">Description</p>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <textarea name="description" id="description" rows="8" 
                            class="form-control">{{ $chalet->description }}</textarea>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="form-group col">
                        <p class="h4">Phone</p>
                        <input type="text" name="phone" value="{{ $chalet->phone }}" class="form-control">
                    </div>
                    <div class="form-group col">
                        <p class="h4">Email</p>
                        <input type="text" name="email" value="{{ $chalet->email }}" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="h4">Address</p>
                        <div class="form-group">
                            <label for="state_id">State Name</label>
                            <select name="state_id" id="state_id" class="form-control">
                                @foreach ($states as $state)
                                @if ($state->id == $chalet->district->city->state->id)
                                    <option value="{{ $state->id }}" selected>{{ $state->name }}</option> 
                                @else
                                    <option value="{{ $state->id }}">{{ $state->name }}</option>  
                                @endif
                                
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city_id">City Name</label>
                            <select name="city_id" id="city_id" class="form-control">
                                @foreach ($cities as $city)
                                @if ($city->id == $chalet->district->city->id)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>  
                                @else
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>  
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="state">District Name</label>
                            <select name="district_id" id="district_id" class="form-control">
                                
                                @foreach ($districts as $district)
                                @if ($district->id == $chalet->district_id)
                                    <option value="{{ $district->id }}" selected>{{ $district->name }}</option>
                                @else
                                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="poscode">Poscode</label>
                            <input type="text" class="form-control" name="poscode" value="{{ $chalet->poscode }}">
                        </div>
                        <div class="form-group">
                            <label for="address">Address Name</label>
                            <input type="text" class="form-control" name="address" value="{{ $chalet->address }}">
                        </div>
                    </div>
                    <div class="col">
                        <p class="h4">Accommodation</p>
                        @php
                            $data = $chalet->accommodations->pluck('id')->toArray();
                        @endphp
                        @foreach ($accommodations as $accommodation)
                            @if (in_array($accommodation->id,$data))
                            <div class="custom-control custom-checkbox ml-4">
                                <input class="custom-control-input" name="accommodations[]" id="{{ $accommodation->id }}"
                                    value="{{ $accommodation->id }}" type="checkbox" checked>
                                <label class="custom-control-label"
                                    for="{{ $accommodation->id }}">{{ $accommodation->name }}</label>
                            </div>
                            @else
                            <div class="custom-control custom-checkbox ml-4">
                                <input class="custom-control-input" name="accommodations[]" id="{{ $accommodation->id }}"
                                    value="{{ $accommodation->id }}" type="checkbox">
                                <label class="custom-control-label"
                                    for="{{ $accommodation->id }}">{{ $accommodation->name }}</label>
                            </div>
                            @endif
                        @endforeach
                        {{-- {{ $chalet->accommodations[0]['name'] }} --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="{{ route('admin.chalet.show',$chalet) }}"><button class="btn btn-primary float-left" type="button">Back</button></a>
                        <button class="btn btn-danger float-right" type="submit">Update</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</main>
@endsection
