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
                @php
                            $categories = \App\Models\MasterData\Category::all(); 
                @endphp 
                @forelse($categories as $category)
              <li><a class="dropdown-item" href="{{ config('app.class_url').'/category/'.$category->id }}">{{ $category->name }}</a></li>
              @empty
              @endforelse
            </ul>
          </li>
          @if(isset(Auth::user()->id))
          <li class="nav-item">
            <a class="btn btn-success" href="{{ url('/backsite/dashboard') }}">My Dashboard</a>
          </li>
          @else
          <li class="nav-item">
            <a class="btn btn-success" href="{{ url('/gates') }}">Sign Up</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-light" href="{{ url('/login') }}">Login</a>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>