<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css')}}" />

    <title>Work faster as a Mobile Developer - BaseKit</title>
  </head>
  <body>
      
    @include('pieces.navbar') 

      <section class="bk-single-product pt-5 pb-10">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <div class="header-primary">
                        <h3 class="lh-base mb-3">
                            {{ $uikit_details->name }}
                        </h3>
                        <p>
                            Designed by BaseKit
                        </p>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-lg-6 col-12">
                    <img src="{{ Storage::url($uikit_details->thumbnail) }}" alt="" class="br-16 img-fluid">
                </div>
                <div class="bk-basic-box col-lg-4 col-12 ms-4">
                    <h4>
                        Improve Your Workflow
                    </h4>
                    <div class="list-action mt-4">
                        <div class="type">
                            <img src="{{ asset('images/ic_flutter.png') }}" alt="" class="icon">
                            <p class="title">
                                Flutter Project
                            </p>
                        </div>
                        <p class="action">
                            <a href="{{ $uikit_details->url_file }}" class="btn btn-info py-2 px-4">Download</a>
                        </p>
                    </div>
                    <div class="clear"></div>
                    <div class="divider my-3"></div>
                    <div class="list-action">
                        <div class="type">
                            <p class="title">
                                11,409 Downloads
                            </p>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="list-action">
                        <div class="type">
                            <p class="title">
                                20,409 View
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>