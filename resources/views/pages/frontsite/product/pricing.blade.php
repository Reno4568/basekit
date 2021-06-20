<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>BaseKit - Speed Your Development Work</title>

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
                        Our Friendly Pricing
                    </h2>
                    <p>
                        Start your future project faster and better with us.
                    </p>
                </div>
            </div>
        </div>
      </section>

      <section class="py-5">
          <div class="container">
              <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Free Trial 14-Days</h5>
                        <p class="card-text">Get an access to our thousands UI for your future project.</p>
                        <a href="#" class="btn btn-light">Start Trial</a>
                      </div>
                    </div>
                  </div>
                  @forelse($all_packages as $item_package)
                  <div class="col-lg-4">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">{{ $item_package->name }} - {{ $item_package->month_length }} month</h5>
                        <p class="card-text">With this package you can unlock all of them and join our community to help each other.</p>
                        <a href="#" class="btn btn-primary">Subscribe Now</a>
                      </div>
                    </div>
                  </div>
                  @empty
                  @endforelse
              </div>
          </div>
      </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>