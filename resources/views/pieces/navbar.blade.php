<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/') }}">BaseKit</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categories
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Travel</a></li>
              <li><a class="dropdown-item" href="#">Health</a></li>
              <li><a class="dropdown-item" href="#">Finance</a></li>
              <li><a class="dropdown-item" href="#">eCommerce</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Request Design</a></li>
            </ul>
          </li>
          @if (session()->has('user'))
            <ul class="navbar-nav ml-auto dropdown navbar-nav--profile">
                <li>
                    <form action="{{ route('search') }}" method="GET" role="search">
                        <div class="input-group">
                            <div class="form-outline">
                                <input type="search" class="form-control h-100" id="exampleFormControlInput1" name="q" placeholder="Cari pixel...">
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-search fa-xs"></i>
                            </button>
                        </div>
                    </form>
                </li>
                <a href="#" class="btn btn-profile" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('images/pic_default.svg') }}"
                        alt="{{ session()->get('user.name') }} from Pixel by BuildWith Angga">
                    <p>
                        Howdy, {{ session()->get('user.name') }}!
                    </p>
                </a>
                <div class="dropdown-menu ml-auto" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('cms-product.index') }}">Dashboard</a>
                    <a class="dropdown-item" href="#">My Profile</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ url('/auth/logout') }}">Logout</a>
                </div>
            </ul>
            @else
          <li class="nav-item">
            <a class="btn btn-primary" href="{{ url('/gate') }}">Login</a>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>