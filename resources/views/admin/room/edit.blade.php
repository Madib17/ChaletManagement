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
                            Update Room
                        </h1>
                        
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container mt-n10">
        <div class="card mb-4">
            <div class="card-header">
                Update Room
                <a href="{{ route('admin.room.destroy',['chalet'=>$chalet,'room'=>$room]) }}"><button class="btn btn-red float-right" type="button">Delete</button></a>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.room.update',['chalet'=>$chalet,'room'=>$room]) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="bedroom_id" class="control-label">Bedroom</label>
                        <select name="bedroom_id" placeholder="placeholder" data-element-index="0" id="bedRoomIndex-1"
                        class="form-control">
                        <option value="{{ $room->bedroom->id }}">{{ $room->bedroom->name }}</option>
                        @foreach($bedrooms as $bedroom) 
                            <option value="{{ $bedroom->id }}">{{ $bedroom->name }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="bed_id" class="control-label">Bed Type</label>
                        <select name="bed_id" placeholder="placeholder" data-element-index="0" id="bedRoomIndex-1"
                            class="form-control">
                            <option value="{{ $room->bed->id }}">{{ $room->bed->name }}</option>
                            @foreach($beds as $bed) 
                                <option value="{{ $bed->id }}">{{ $bed->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="adult">No. Adult</label>
                                <input class="form-control" name="adult" id="adult" type="number"
                                    placeholder="Number of Adult" value="{{ $room->adult }}" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="child">No. Child</label>
                                <input class="form-control" name="child" id="child" type="number"
                                    placeholder="Number of Child" value="{{ $room->child }}"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="price">Price</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">RM</div>
                                    </div>
                                    <input type="number" class="form-control" name="price" id="price" value="{{ $room->price }}">
                                    <div class="input-group-append" >
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="size">Size</label>
                                <div class="input-group">
                                    <input type="number" class="form-control" name="size" id="price" value="{{ $room->size }}">
                                    <div class="input-group-append" >
                                        <span class="input-group-text">sqm</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="detail">Description</label>
                        <textarea class="form-control" id="detail" name="detail" rows="10">{{ $room->detail }}</textarea>
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