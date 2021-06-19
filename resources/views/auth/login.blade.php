@extends('layouts.auth')

{{-- set title --}}
@section('title', ' Log In')

@section('content')

    <main id="content" role="main">

        @if ($errors->any())
            <div class="alert alert-soft-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="position-relative overflow-hidden space-top-md-3">
            
            <div class="container position-relative space-top-2 space-top-md-0 space-top-lg-3 space-bottom-2 space-bottom-md-3 space-bottom-xl-5">
                <div class="row position-relative z-index-2 mt-md-n5">
                    <div class="col-md-8 mb-7 mb-md-0">


                        <!-- Title -->
                        <div class="w-md-75 mb-7 mt-2">
                            <h1 class="display-4">Discover a place you'll
                                <span class="text-primary text-highlight-warning">
                                    <span class="js-text-animation"
                                        data-hs-typed-options='{
                                            "strings": ["love to live", "enjoy living"],
                                            "typeSpeed": 90,
                                            "loop": true,
                                            "backSpeed": 30,
                                            "backDelay": 2500
                                        }'></span>
                                </span>
                            </h1>
                        </div>
                        <!-- End Title -->
            
                        <!-- Card -->
                        <div class="card p-2 mb-3">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <!-- Input Group -->
                                <div class="form-row input-group-borderless">
                                    <div class="col-sm mb-2 mb-md-0">
                                        <div class="input-group input-group-merge input-group-borderless">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class='bx bx-envelope'></i>
                                                </div>
                                            </div>
                        
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your Email" aria-label="Enter your valid email">
                                        </div>
                                    </div>
                    
                                    <div class="col-sm d-sm-none">
                                        <hr class="my-0">
                                    </div>
                                    
                                    <div class="col-sm column-divider-sm mb-2 mb-md-0">
                                        <div class="input-group input-group-merge input-group-borderless">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class='bx bx-key' ></i>
                                                </div>
                                            </div>
                    
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password" aria-label="Enter your valid password">
                                        </div>
                                    </div>
                    
                                    <div class="col-md-auto">
                                        <button type="submit" class="btn btn-block btn-primary px-5">log In</button>
                                    </div>

                                </div>
                                <!-- Button -->
                                <hr>
                                <div class="row align-items-center mt-2 mb-2">
                                    <div class="col-sm-12">
                                        <span class="font-size-1 text-muted">Don't have an account?</span>
                                        <a class="font-size-1 font-weight-bold" href="{{ route('gates.index') }}">Sign Up</a>
                                    </div>
                                </div>
                                <!-- End Button -->
                                <!-- End Input Group -->
                            </form>
                        </div>
                        <!-- End Card -->
                    </div>
                </div>
                <!-- End Row -->
        
                <div class="col-md-6 position-md-absolute top-0 right-0">
                    <img class="img-fluid rounded" src="{{ asset('/front-design/assets/img/900x900/img23.jpg') }}" alt="Image Description">

                    <figure class="max-w-15rem w-100 position-absolute top-0 left-0 z-index-n1">
                        <div class="mt-n6 ml-n5">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 335.2 335.2" width="100" height="100">
                                <circle fill="#FFC107" opacity=".7" cx="167.6" cy="167.6" r="130.1"/>
                            </svg>
                        </div>
                    </figure>

                    <figure class="max-w-15rem w-100 position-absolute bottom-0 right-0 z-index-n1">
                        <div class="mb-n2 ml-4">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 335.2 335.2" width="120" height="120">
                                <circle fill="none" stroke="#377DFF" stroke-width="75" cx="167.6" cy="167.6" r="130.1"/>
                            </svg>
                        </div>
                    </figure>
        
                    <figure class="max-w-15rem w-100 position-absolute bottom-0 right-0 z-index-n1">
                        <div class="mb-n7 mr-n7">
                            <img class="img-fluid" src="{{ asset('/front-design/assets/svg/components/dots-1.svg') }}" alt="Image Description">
                        </div>
                    </figure>
                </div>
            </div>
      
            <div class="col-md-10 position-absolute top-0 left-0 z-index-n1 gradient-y-three-sm-primary h-100" style="background-size: calc(1000px + (100vw - 1000px) / 2);"></div>

        </div>
    </main>

@endsection