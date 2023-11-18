<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky position-relative">
      
      <a class="col-md-3 col-lg-2" href="/"><img src="../img/logo-irma.png" alt="Logo Irma" class="position-relative"></a>

      <ul class="nav flex-column">  
        <li class="nav-item">
          <a href="/dashboard" class="fs-5 fw-bold text-white nav-link {{ Request::is('dashboard') ? 'active' : ''}}" aria-current="page">
            {{-- <span data-feather="home" class="align-text-bottom"></span> --}}
            Dashboard
          </a>
        </li>
        
        <li class="nav-item">
          <a class="fs-5 fw-bold text-white nav-link active" href="{{ route('all-members') }}">
            {{-- <span data-feather="file-text" class="align-text-bottom"></span> --}}
            Data Anggota
          </a>
        </li>

        <li class="nav-item">
          <a class="fs-5 fw-bold text-white nav-link {{ Request::is('dashboard') ? 'active' : ''}}" href="{{ route('all-posts') }}">
            {{-- <span data-feather="file-text" class="align-text-bottom"></span> --}}
            Postingan 
          </a>
        </li>

        <li class="nav-item">
          <a class="fs-5 fw-bold text-white nav-link {{ Request::is('dashboard') ? 'active' : ''}}" href="#">
            {{-- <span data-feather="file-text" class="align-text-bottom"></span> --}}
            Inventaris
          </a>
        </li>
      </ul>

      @can('admin')
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Administrator</span>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : ''}}" href="/dashboard/categories">
              <span data-feather="grid" class="align-text-bottom"></span>
            Post Categories
            </a>
          </li>
        </ul>
      @endcan

    </div>
</nav>