<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>BaseKit - Speed Your Development Work</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">Basekit</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/pricing') }}">Pricing</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categories
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Health</a></li>
                  <li><a class="dropdown-item" href="#">Education</a></li>
                  <li><a class="dropdown-item" href="#">Finance</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Request Design</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="btn btn-success" href="{{ url('/gates') }}">Sign Up</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-light" href="{{ url('/login') }}">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

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