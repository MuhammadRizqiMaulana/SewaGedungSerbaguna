<nav class="navbar navbar-expand navbar-dark bg-warning topbar mb-4 static-top">
  <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
    <i class="fa fa-bars text-gray-800"></i>
  </button>
  <ul class="navbar-nav ml-auto">
    
    <div class="topbar-divider d-none d-sm-block"></div>
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <img class="img-profile rounded-circle" src="{{ url('img/profil_admin/'.Session::get('foto')) }}" style="max-width: 60px">
          <span class="ml-2 d-none text-white d-lg-inline small">{{Session::get('nama_admin')}}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="{{url ('ProfilAdmin')}}{{Session::get('id_admin')}}">
          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Profil
        </a>
        <div class="dropdown-divider"></div>

        <a class="dropdown-item" href="{{ url ('logout') }}">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          Logout
        </a>
      </div>
    </li>
  </ul>
</nav>