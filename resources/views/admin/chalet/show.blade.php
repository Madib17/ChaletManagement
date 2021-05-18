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
                         <p class="h4"></p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </main>
 @endsection
