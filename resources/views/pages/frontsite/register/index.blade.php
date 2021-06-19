@extends('layouts.auth')

{{-- set title --}}
@section('title', ' Log In')

@section('content')

    <main id="content" role="main">

        {{-- error --}}
        @if ($errors->any())
            <div class="alert alert-soft-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

         <!-- Signup Form Section -->
        <div class="position-relative">
            <div class="container space-1 space-lg-1">
                <div class="row justify-content-lg-between align-items-lg-center">
                    <div class="col-lg-5 mb-7 mb-lg-0">
                        

                        <hr>

                        <!-- Info -->
                        <div class="mt-2 mb-5">
                            <h2>We help Flutter Developer to work faster and better.</h2>
                            <p>Our products are ready to use for your existing or next project, and easy to customize.</p>
                        </div>
        
                        <h4 class="mb-3">Why we might fit for you:</h4>
            
                        <div class="media text-body mb-3">
                            <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                            <div class="media-body">
                            High-quality design with better experience.
                            </div>
                        </div>

                        <div class="media text-body mb-3">
                            <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                            <div class="media-body">
                            Full documentation and ready to use.
                            </div>
                        </div>

                        <div class="media text-body mb-3">
                            <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                            <div class="media-body">
                            We provide a private consultation group.
                            </div>
                        </div>
                        <!-- End Info -->
                    </div>
        
                    <div class="col-lg-6">
                        <!-- Signup Form -->
                        <form class="form js-validate card card-bordered w-md-85 w-lg-100 mx-md-auto" action="{{ route('gates.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="card-header bg-primary text-white text-center py-4 px-5 px-md-6">
                                <h4 class="text-white mb-0">Fill out the form to get started with Basekit</h4>
                            </div>
            
                            <div class="card-body p-md-6">
                                <div class="row">
                                    <div class="col-sm-12 mb-3">
                                        <!-- Form Group -->
                                        <div class="js-form-message form-group">
                                            <label for="name" class="input-label">Your Name</label>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Shayna" aria-label="Shayna" required
                                                data-msg="Please enter first your name">
                                        </div>
                                        <!-- End Form Group -->
                                    </div>
                
                                    <div class="col-sm-12 mb-3">
                                        <!-- Form Group -->
                                        <div class="js-form-message form-group">
                                            <label for="email" class="input-label">Email address</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="shayna@basekit.com" aria-label="shayna@basekit.com" required
                                                data-msg="Please enter a valid email address">
                                        </div>
                                        <!-- End Form Group -->
                                    </div>
                
                                    <div class="col-sm-6 mb-3">
                                        <!-- Form Group -->
                                        <div class="js-form-message form-group">
                                            <label for="password" class="input-label">Password</label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="*********" aria-label="*********" required
                                                data-msg="Your password is invalid. Please try again">
                                        </div>
                                        <!-- End Form Group -->
                                    </div>
                
                                    <div class="col-sm-6 mb-3">
                                        <!-- Form Group -->
                                        <div class="js-form-message form-group">
                                            <label for="confirmPassword" class="input-label">Confirm password</label>
                                            <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="*********" aria-label="*********" required
                                                data-msg="Password does not match the confirm password">
                                        </div>
                                        <!-- End Form Group -->
                                    </div>
                                </div>
                
                                <!-- Checkbox -->
                                <div class="js-form-message mb-5">
                                    <div class="custom-control custom-checkbox d-flex align-items-center text-muted">
                                        <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox" required
                                                data-msg="Please accept our Terms and Conditions.">
                                        <label class="custom-control-label" for="termsCheckbox">
                                            <small> I agree to the <a class="link-underline" href="#">Terms and Conditions</a> </small>
                                        </label>
                                    </div>
                                </div>
                                <!-- End Checkbox -->
            
                                <div class="row align-items-center">
                                    <div class="col-sm-7 mb-3 mb-sm-0">
                                        <p class="font-size-1 text-muted mb-0">Already have an account? <a class="font-weight-bold" href="{{ route('login') }}">Log In</a></p>
                                    </div>
                                    <div class="col-sm-5 text-sm-right">
                                        <button type="submit" class="btn btn-sm btn-primary">Sign Up Now</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                        <!-- End Signup Form -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Signup Form Section -->
    </main>

@endsection