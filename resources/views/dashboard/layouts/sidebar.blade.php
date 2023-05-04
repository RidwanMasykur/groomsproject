<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span>
            Beranda
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/forum*') ? 'active' : ''}}" href="/dashboard/forum">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Forum
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/jadwal') ? 'active' : ''}}" href="/dashboard/jadwal">
            <span data-feather="calendar" class="align-text-bottom"></span>
            Penjadwalan
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/belanja') ? 'active' : ''}}" href="/dashboard/belanja">
            <span data-feather="shopping-cart" class="align-text-bottom"></span>
            Belanja
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/akun') ? 'active' : ''}}" href="/dashboard/akun">
            <span data-feather="user" class="align-text-bottom"></span>
            Akun
          </a>
        </li>
      </ul>
    </div>
  </nav>