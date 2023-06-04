<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">Grooms</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link disabled {{ ($title === "Grooms Home") ? 'active' : '' }}" href="/">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled {{ ($title === "Grooms Forum") ? 'active' : '' }}" href="/forum">Forum</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link disabled {{ ($title === "Grooms Jadwal") ? 'active' : '' }}" href="/jadwal">Jadwal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled {{ ($title === "Grooms Belanja") ? 'active' : '' }}" href="/belanja">Belanja</a>
          </li> --}}
        </ul>

        <ul class="navbar-nav ms-auto">
            @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Selamat datang, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/dashboard">Beranda</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="/logout" method="post">
                        @csrf
                    <button type="submit" class="dropdown-item">Keluar</button>
                    </form>
                  </li>
                </ul>
              </li>
            @else
              <li class="nav-item">
                <a href="/login" class="nav-link">Masuk</a>
              </li>
              <li class="nav-item">
                <a href="/register" class="nav-link">Daftar</a>
              </li>  
            @endauth
        </ul>
      </div>
    </div>
</nav>