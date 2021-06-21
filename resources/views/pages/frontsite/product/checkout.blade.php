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
                <div class="col-lg-4 col-12">
                    <h2 class="lh-base">
                        Checkout Subscribe
                    </h2>
                    <p>
                        Unlock our thousands UI design that helps you to be more productive.
                    </p>
                </div>
            </div>
        </div>
      </section>

      <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-12">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Package Name</th>
                            <th scope="col">Duration</th>
                            <th scope="col">Price</th>
                          </tr>
                        </thead>
                        <tbody>
                          @if($type == 'trial')
                          <tr>
                            <td>{{ $type }}</td>
                            <td>3 Days</td>
                            <td>IDR 0</td>
                          </tr>
                          @else
                          @endif
                        </tbody>
                      </table>
                </div>
            </div>
            <div class="row mt-4 justify-content-center">
                <div class="col-lg-6">
                    @if($type == 'trial')
                    <a href="{{ config('app.class_url').'/checkout/pay/'.$type }}" class="btn btn-success">
                        Checkout Now
                    </a>
                    @else
                    @endif
                </div>
            </div>
        </div>
      </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>