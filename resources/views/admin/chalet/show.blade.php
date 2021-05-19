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
                             {{ $chalet->name }}
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
                 <div class="form-group">
                     <p class="h4">Description</p>
                     <textarea name="description" id="description" rows="8" readonly
                         class="form-control">{{ $chalet->description }}</textarea>
                 </div>
                 <hr>
                 <div class="row">
                     <div class="form-group col">
                         <p class="h4">Phone</p>
                         <input type="text" value="{{ $chalet->phone }}" class="form-control" readonly>
                     </div>
                     <div class="form-group col">
                         <p class="h4">Email</p>
                         <input type="text" value="{{ $chalet->email }}" class="form-control" readonly>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col">
                         <p class="h4">Address</p>
                         <textarea rows="5" readonly
                             class="form-control">{{ $chalet->address }} , {{ $chalet->district->name }} , {{ $chalet->district->city->name }} {{ $chalet->poscode }} , {{ $chalet->district->city->state->name }}</textarea>
                     </div>
                     <div class="col">
                         <p class="h4">Accommodation</p>
                         @foreach ($chalet->accommodations as $accommodation)
                         <div>
                            <i data-feather="check-square"></i>{{ $accommodation->name }}
                        </div>
                             @endforeach
                             {{-- {{ $chalet->accommodations[0]['name'] }} --}}
                     </div>
                 </div>
                 <hr>
                 <div class="row">
                     <div class="col">
                        <p class="h4">Rooms</p> 
                     </div>
                     <div class="col">
                        <a href="{{ route('admin.accommodation.create') }}"><button
                            class="btn btn-primary float-right">Add More Room</button></a>
                     </div>
                 </div>
                 <div class="row">
                     @foreach ($chalet->rooms as $room)
                    <div class="col-lg-4 mb-4">
                        <a class="card lift lift-sm h-100" href="#!">
                            <div class="card-body">
                                <h5 class="card-title text-primary mb-2">
                                    <i class="mr-2" data-feather="edit-2"></i>
                                    {{ Str::ucfirst($room->bedroom->name) }}
                                </h5>
                                <p class="card-text mb-1">{{ $room->detail }}</p>
                            </div>
                            <div class="card-footer"><div class="small text-muted"><i class="fas fa-bed mr-1"></i>{{ Str::ucfirst($room->bed->name) }}<i class="fas fa-male ml-1"></i><i class="fas fa-female mr-1"></i>{{ $room->adult }}<i class="fas fa-child mx-1"></i>{{ $room->child }}</div></div>
                        </a>
                    </div>
                    @endforeach
                 </div>
                 <hr>
                 <div class="row">
                     <div class="col">
                         <p class="h4">Policies</p>
                     </div>
                     <div class="col">
                        <a href="{{ route('admin.accommodation.create') }}"><button
                            class="btn btn-primary float-right">Add More Policy</button></a>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col mt-4">
                         @foreach ($chalet->policies as $policy)
                         <a class="card card-icon lift lift-sm mb-4" href="knowledge-base-article.html">
                             <div class="card-body">
                                 <div class="d-flex align-items-center justify-content-between">
                                     <div class="h5 card-title mb-0">{{ $policy->title }}</div>
                                     <i class="flex-shrink-0 ml-4" data-feather="chevron-right"></i>
                                 </div>
                             </div>
                         </a>
                         @endforeach
                     </div>
                 </div>
                 <hr>
                 <div class="row">
                     <div class="col">
                         <p class="h4">Photo</p>
                     </div>
                     <div class="col">
                        <a href="{{ route('admin.accommodation.create') }}"><button
                            class="btn btn-primary float-right">Add More Photo</button></a>
                     </div>
                 </div>
                 <div class="row">
                    @foreach ($chalet->photos as $photo)
                     <div class="col">
                         <img src="{{ asset('/storage/'.$photo->name) }}" alt="{{ $photo->name }}" class="img-thumbnail rounded mx-auto d-block lift">
                     </div>
                     <div class="col">

                     </div>
                     <div class="col">
                         
                    </div>


                     @endforeach
                 </div>
             </div>
         </div>
     </div>
 </main>
 @endsection
