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
                
                @auth
                <ul class="navbar-nav ml-auto dropdown navbar-nav--profile">

                    <li>
                        <form action="" method="GET" role="search">
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

                    <div class="dropdown">
                        <a class="btn btn-profile" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('images/ic_flutter.png') }}"
                                width="20"
                                height="20"
                                alt="{{ Auth::user()->name }} from Pixel by BuildWith Angga">
                            <span>
                                Howdy, {{ Auth::user()->name }}!
                            </span>
                        </a>
                    
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="">Dashboard</a>
                            <a class="dropdown-item" href="#">My Profile</a>
                            <a class="dropdown-item" href="#">Settings</a>

                            <div class="dropdown-divider"></div>
                            
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </div>
                @else
                    <li class="nav-item">
                        <a class="btn btn-primary" href="{{ url('/gate') }}">Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>