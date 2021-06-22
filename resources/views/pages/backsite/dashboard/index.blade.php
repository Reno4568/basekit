@extends('layouts.default')

{{-- set title --}}
@section('title', ' Dashboard')

@section('content')
<!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">

            {{-- breadcumb --}}
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Dashboard</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Dashboard Activity</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            {{-- breadcumb --}}

            <div class="content-body">
                @if(Auth::user()->email == 'admin@mail.com')
                <div class="row py-2 my-2">
                    <div class="col-lg-2">
                        <h2>
                            {{ $total_users }}
                        </h2>
                        <p>
                            Total Users
                        </p>
                    </div>
                    <div class="col-lg-2">
                        <h2>
                            {{ $total_downloaded }}
                        </h2>
                        <p>
                            Total Downloaded
                        </p>
                    </div>
                    <div class="col-lg-2">
                        <h2>
                            {{ $total_trial_ongoing }}
                        </h2>
                        <p>
                            Trial Ongoing
                        </p>
                    </div>
                    <div class="col-lg-2">
                        <h2>
                            {{ $total_trial_ended }}
                        </h2>
                        <p>
                            Trial Ended
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-lg-4 text-center">
                        <h1>
                            Let's Help Developer
                        </h1>
                        <p>
                            Tambahkan produk terbaru yang dapat digunakan oleh Flutter Developer di seluruh dunia.
                        </p>
                        <p>
                            <a href="{{ url('/backsite/ui_kits') }}" class="btn btn-success">
                                Add Product
                            </a>
                        </p>
                    </div>
                </div>
                @else
                <div class="row justify-content-center">
                    <div class="col-lg-4 text-center">
                        <h1>
                            Work Faster & Better
                        </h1>
                        <p>
                            Gunakan projek Flutter yang telah kami siapkan untuk projek terbaikmu.
                        </p>
                        <p>
                            <a href="{{ url('/home') }}" class="btn btn-success">
                                View Products
                            </a>
                        </p>
                    </div>
                </div>
                @endif
            </div>

        </div>
    </div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

@endsection