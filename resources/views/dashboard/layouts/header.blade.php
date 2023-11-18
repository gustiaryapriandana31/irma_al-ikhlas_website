<header class="navbar sticky-top flex-md-nowrap p-0">
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <h1 class="welcome text-white">SELAMAT DATANG {{ auth()->user()->username }}</h1>

    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <form action="/logout" method="post">
          @csrf
          {{-- <button type="submit" class="nav-link px-3 logout border-0 text-end"><i class="bi bi-box-arrow-right"></i>Logout 
          </button> --}}
          <button type="submit" class="nav-link px-3 logout border-0 text-end"><i class="bi bi-box-arrow-right"></i> 
            Logout</button>
        </form>
      </div>
    </div>
</header>
  