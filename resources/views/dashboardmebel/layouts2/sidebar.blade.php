<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/dashboardmebel/produk') ? 'active' : ''}}" aria-current="page" href="/dashboardmebel/produk">
            <span data-feather="database" class="align-text-bottom"></span>
            Produk
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboardmebel') ? 'active' : ''}}" href="/dashboardmebel/pesananmasuk">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Pesanan Masuk
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboardmebel/akun') ? 'active' : ''}}" href="/dashboardmebel/akun">
            <span data-feather="user" class="align-text-bottom"></span>
            Akun
          </a>
        </li>
      </ul>
    </div>
  </nav>