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
                 <div class="row">
                     <div class="col">
                        <p class="h4">Description</p>
                     </div>
                     <div class="col">
                         @if ($chalet->user_id == Auth::id())
                         <a href="{{ route('admin.chalet.edit',$chalet) }}"><button
                             class="btn btn-primary float-right">Edit Chalet</button></a>
                         @endif
                     </div>
                 </div>
                 <div class="row mt-2">
                     <div class="col">
                         <textarea name="description" id="description" rows="8" readonly
                         class="form-control">{{ $chalet->description }}</textarea>
                     </div>
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
                     @if ($chalet->user_id == Auth::id())
                     <div class="col">
                        <a href="{{ route('admin.room.create', $chalet->id) }}"><button
                            class="btn btn-primary float-right">Add More Room</button></a>
                     </div>  
                         @endif
                 </div>
                 <div class="row">
                     @foreach ($chalet->rooms as $room)
                    <div class="col-lg-4 mb-4">
                        <a class="card lift lift-sm h-100" href="{{ route('admin.room.edit',['chalet'=>$chalet->id,'room'=>$room->id]) }}">
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
                        @if ($chalet->user_id == Auth::id())
                        <a href="{{ route('admin.policy.create',$chalet) }}"><button
                            class="btn btn-primary float-right">Add More Policy</button></a>
                        @endif
                     </div>
                 </div>
                 <div class="row">
                     <div class="col mt-4">
                         @foreach ($chalet->policies as $policy)
                         <a class="card card-icon lift lift-sm mb-4" href="{{ route('admin.policy.edit',['chalet'=>$chalet->id,'policy'=>$policy->id]) }}">
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
                        @if ($chalet->user_id == Auth::id())
                        <a href="{{ route('admin.photo.create',$chalet) }}"><button
                            class="btn btn-primary float-right">Add More Photo</button></a>
                        @endif
                     </div>
                 </div>
                 <div class="row mt-2">
                    @foreach ($chalet->photos as $photo)
                     <div class="col">
                        <div class="card lift">
                            <img class="card-img-top" src="{{ asset('/storage/'.$photo->name) }}" alt="{{ $photo->name }}" alt="{{ $photo->name }}">
                            <div class="card-body">
                                <a href="{{ route('admin.photo.destroy', ['chalet'=>$chalet,'photo'=>$photo]) }}"><button class="btn btn-datatable btn-icon btn-transparent-dark "><i
                                    data-feather="trash-2" ></i></button></a>
                            </div>
                        </div>
                         {{-- <img src="{{ asset('/storage/'.$photo->name) }}" alt="{{ $photo->name }}" class="img-thumbnail rounded mx-auto d-block lift"> --}}
                        </div>
                        @endforeach
                 </div>
                 <hr>
                 <div class="row">
                     <div class="col">
                         <p class="h4">Review</p>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col">
                         @foreach ($chalet->reviews as $review)
                             
                         <div class="card card-header-actions mt-4 lift">
                             <div class="card-header">
                                 {{ $review->name }} 
                                 <div class="dropdown no-caret">
                                     <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         <i data-feather="more-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right animated--fade-in-up" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="{{ route('admin.report.create',['report'=>$r]) }}">Report</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                        @for ($i = 0; $i < $review->point; $i++)
                                            <i data-feather="star"></i>
                                        @endfor
                                    </div>
                                    {{ $review->detail }}
                                </div>
                            </div>
                            @endforeach
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </main>
 @endsection
