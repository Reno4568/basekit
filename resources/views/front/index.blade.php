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

    <section class="bk-big-banner pt-10 pb-5">
        <div class="container-fluid">
            <div class="row justify-content-center text-center">
                <div class="col-lg-4 col-12">
                    <h1 class="mb-4">
                        Work Faster as a Mobile Developer
                    </h1>
                    <p class="lh-lg">
                        We are providing a thousand template so that you can work faster and deliver the best User-Interface design
                    </p>
                    <p class="mt-4">
                        <a href="#" class="btn btn-info py-3 px-4">Explore Design</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bk-gallery-content pt-5 pb-10">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-lg-12 col-12">
                    <div class="header-primary">
                        <h3>
                            New Baked
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse( $all_uikit as $item_all_uikit )
                <div class="col-lg-3 col-12 mb-4">
                    <div class="item">
                        <a href="{{ config('app.class_url').'/details/'.$item_all_uikit->id }}">
                            <div class="thumbnail">
                                <img src="{{ Storage::url($item_all_uikit->thumbnail) }}" alt="" class="img-fluid cover">
                                <span class="badge bg-secondary p-2 mt-2">{{ $item_all_uikit->id_category }}</span>
                            </div>
                        </a>
                        <div class="info mt-3">
                            <h3 class="lh-base">
                                {{ $item_all_uikit->name }}
                            </h3>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-lg-12 col-12 mb-4">
                    <p>Empty...</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>