@extends('admin.layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <!-- Basic registration form-->
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header justify-content-center">
                    <h3 class="font-weight-light my-4">Create Admin</h3>
                </div>
                <div class="card-body">
                    <!-- Registration form-->
                    <form>
                        <!-- Form Row-->
                        <div class="form-group">
                            <!-- Form Group (first name)-->
                            <div class="form-group">
                                <label class="small mb-1" for="name">Full Name</label>
                                <input class="form-control" id="name" name="name" type="text"
                                    placeholder="Enter full name" />
                            </div>
                        </div>
                        <!-- Form Group (email address)            -->
                        <div class="form-group">
                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                            <input class="form-control" id="inputEmailAddress" type="email" aria-describedby="emailHelp"
                                placeholder="Enter email address" />
                        </div>
                        <!-- Form Row    -->
                        <div class="form-row">
                            <div class="col-md-6">
                                <!-- Form Group (password)-->
                                <div class="form-group">
                                    <label class="small mb-1" for="password">Password</label>
                                    <input class="form-control" id="password" name="password" type="password"
                                        placeholder="Enter password" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Form Group (confirm password)-->
                                <div class="form-group">
                                    <label class="small mb-1" for="confirmPassword">Confirm Password</label>
                                    <input class="form-control" id="confirmPassword" name="confirmPassword"
                                        type="password" placeholder="Confirm password" />
                                </div>
                            </div>
                        </div>
                        <!-- Form Group (create account submit)-->
                        <div class="form-group mt-4 mb-0"><a class="btn btn-primary btn-block"
                                href="auth-login-basic.html">Create Account</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
