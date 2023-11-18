 {{-- Navigation Bar --}}
<nav class="navbar navbar-expand-lg bg-body-tertiary position-fixed mt-2 rounded-1">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="img/logo-irma.png" alt="Irma Al-Ikhlas" width="100" height="55" class="d-inline-block align-text-top ms-4">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active me-5" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link me-5" href="#">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link me-5" href="#">Tentang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link me-5" href="#">Bidang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link me-5" href="#">Program</a>
            </li>
            <li class="nav-item">
                <a class="nav-link me-5" href="#">Postingan</a>
            </li>
            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Welcome back, {{ auth()->user()->name }}
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                      <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> 
                          Logout</button>
                      </form>
                    </li>
                  </ul>
                </li>         
                @else
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav> 