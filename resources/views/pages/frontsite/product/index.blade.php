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
                        Speed Up Your Flutter Project Workflow Today!
                    </h2>
                    <p>
                        Download our handcraft UI code that ready to use for your next project.
                    </p>
                </div>
            </div>
        </div>
      </section>

      <section class="py-5">
          <div class="container">
              <div class="row">
                  @forelse($ui_kits as $item_ui_kit)
                  <div class="col-lg-3 col-12 mb-4">
                    <a href="{{ config('app.class_url').'/details/'.$item_ui_kit->id }}">
                        <img src="{{ Storage::url($item_ui_kit->thumbnail) }}" alt="" class="img-fluid">
                    </a>
                      <h5 class="mt-3 lh-base">
                          {{ $item_ui_kit->name }}
                      </h5>
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