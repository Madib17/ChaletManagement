@extends('admin.layouts.main')

@section('content')
<main>
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-fluid">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="user"></i></div>
                            Account Settings - Profile
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container mt-4">
        <!-- Account page navigation-->
        <nav class="nav nav-borders">
            <a class="nav-link active ml-0" href="{{ route('admin.account.profile') }}">Profile</a>
            <a class="nav-link" href="{{ route('admin.account.security') }}">Security</a>
        </nav>
        <hr class="mt-0 mb-4" />
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile rounded-circle mb-2"
                            src="{{ asset('admin/assets/img/illustrations/profiles/profile-1.png') }}" alt="" />
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                        <!-- Profile picture upload button-->
                        <button class="btn btn-primary" type="button">Upload new image</button>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">
                        <form action="{{ route('admin.account.profile') }} " method="POST">
                            <!-- Form Group (username)-->
                            <div class="form-group">
                                <label class="small mb-1" for="name">Full Name</label>
                                <input class="form-control" id="name" type="text"
                                    placeholder="Enter your username" value="{{ Auth::user()->name }}" />
                            </div>
                            <!-- Form Row-->

                            <!-- Form Group (email address)-->
                            <div class="form-group">
                                <label class="small mb-1" for="email">Email address</label>
                                <input class="form-control" id="email" type="email"
                                    placeholder="Enter your email address" value="{{ Auth::user()->email }}" />
                            </div>
                            <!-- Form Row-->
                            <div class="form-row">
                                <!-- Form Group (phone number)-->
                                <div class="form-group col-md-6">
                                    <label class="small mb-1" for="inputPhone">Phone number</label>
                                    <input class="form-control" id="inputPhone" type="tel"
                                        placeholder="Enter your phone number" value="011111111" />
                                </div>
                            </div>
                            <!-- Save changes button-->
                            <button class="btn btn-primary" type="submit">Save changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
