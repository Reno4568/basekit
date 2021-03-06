<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/mainq.css')}}"/>


    <title>BaseKit - Speed Your Development Work</title>
    <meta name="description" content="Download template Flutter {{ $details_product->name }} secara online dan gratis berkonsultasi dengan mentor yang berpengalaman pada bidangnya di BaseKit.">
    <meta name="keywords" content="Flutter, Android, Dart, UI Design">
    <meta name="author" content="BaseKit" />

    <meta image="{{ Storage::url($details_product->thumbnail) }}">
    <meta property="og:type" content="article">
    <meta property="og:image" content="{{ Storage::url($details_product->thumbnail) }}">

    <meta property="og:type" content="article">
    <meta property="og:title" content="BaseKit - Speed Your Development Work">
    <meta property="og:site_name" content="BaseKit">
    <meta property="og:url" content="https://getbasekit.com/details/{{ $details_product->id }}">
    <meta property="og:description" content="Download template Flutter {{ $details_product->name }} secara online dan gratis berkonsultasi dengan mentor yang berpengalaman pada bidangnya di BaseKit.">

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WVE956P96X"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-WVE956P96X');
</script>


  </head>
  <body>
      
    @include('pages.frontsite.components.navbar')

      <section class="py-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-5 col-12">
                    <h2 class="lh-base">
                        {{ $details_product->name }}
                    </h2>
                    <p>
                        @php
                            $category_name = \App\Models\MasterData\Category::where('id', $details_product->id_category)->first(); 
                        @endphp 
                        Category: {{ $category_name->name }}
                    </p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-7">
                    <img src="{{ Storage::url($details_product->thumbnail) }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-5">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                    <img src="{{ asset('images/ic_flutter.png') }}" alt="" class="img-fluid" width="45">
                          <h5 class="card-title mt-5">{{ $total_downloaded }} Downloaded</h5>
                          <p class="card-text mb-5">Tingkatkan kinerjamu sebagai Developer dengan projek Flutter buatan kami.</p>
                          @if(isset(Auth::user()->id))
                    <p>
                        <a href="{{ config('app.class_url').'/download_product/'.$details_product->id }}" class="btn btn-success">
                            Download Now
                        </a>
                    </p>
                    <p>
                        <a target="_blank" href="https://join.slack.com/t/getbasekit/shared_invite/zt-ruqtiq2e-eAxc4ZSwoFyBmA9~0lPY4w" class="btn btn-light">
                            Join Grup Konsultasi
                        </a>
                    </p>
                    @else
                    <a href="{{ url('/login') }}" class="btn btn-light">
                        Sign In to Download
                    </a>
                    @endif
                        </div>
                      </div>
                    <br>
                    
                </div>
            </div>
        </div>
      </section>

    @include('pages.frontsite.components.promotionbox')


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>