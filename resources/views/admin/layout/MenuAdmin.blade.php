<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <div class="sidebar-brand d-flex align-items-center justify-content-center bg-gradient-warning">
        <div class="sidebar-brand-text">
          <img src="{{ asset('img/logo/logo.png') }}" width="70">
        </div>
        <div class="sidebar-brand-text">Gedung Serbaguna</div>
      </div>
      <hr class="sidebar-divider my-0">

      <li class="nav-item {{ Request::is('DashboardAdmin')? "active":""}}">
        <a class="nav-link" href="{{url ('DashboardAdmin')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <hr class="sidebar-divider">
      
      <li class="nav-item {{ Request::is('CrudAkunAdmin')? "active":""}}  {{ Request::is('CrudAkunUser')? "active":""}}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap1"
          aria-expanded="true" aria-controls="collapseBootstrap1">
          <i class="far fa-fw fa-user"></i>
          <span>Akun</span>
        </a>
        <div id="collapseBootstrap1" class="collapse {{ Request::is('CrudAkunAdmin')? "show":""}} {{ Request::is('CrudAkunUser')? "show":""}} " aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Akun</h6>
            <a class="collapse-item {{ Request::is('CrudAkunUser')? "active":""}}" href="{{url ('CrudAkunUser')}}">Akun User</a>
            <a class="collapse-item {{ Request::is('CrudAkunAdmin')? "active":""}}" href="{{url ('CrudAkunAdmin')}}">Akun Admin</a>
          </div>
        </div>
      </li>

      <li class="nav-item {{ Request::is('CrudFasilitas')? "active":""}}  {{ Request::is('CrudGedung')? "active":""}}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap2"
          aria-expanded="true" aria-controls="collapseBootstrap2">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Master</span>
        </a>
        <div id="collapseBootstrap2" class="collapse {{ Request::is('CrudFasilitas')? "show":""}} {{ Request::is('CrudGedung')? "show":""}} " aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Master</h6>
            <a class="collapse-item {{ Request::is('CrudGedung')? "active":""}}" href="{{url ('CrudGedung')}}">Gedung</a>
            <a class="collapse-item {{ Request::is('CrudFasilitas')? "active":""}}" href="{{url ('CrudFasilitas')}}">Fasilitas</a>
          </div>
        </div>
      </li>

      <li class="nav-item {{ Request::is('CrudPenyewaanGedung')? "active":""}}  {{ Request::is('CrudPembayaranGedung')? "active":""}}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap3"
          aria-expanded="true" aria-controls="collapseBootstrap3">
          <i class="far fa-fw fa-clipboard"></i>
          <span>Penyewaan Gedung</span>
        </a>
        <div id="collapseBootstrap3" class="collapse {{ Request::is('CrudPembayaranGedung')? "show":""}} {{ Request::is('CrudPenyewaanGedung')? "show":""}} " aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Penyewaan Gedung</h6>
            <a class="collapse-item {{ Request::is('CrudPenyewaanGedung')? "active":""}}" href="{{url ('CrudPenyewaanGedung')}}">Sewa Gedung</a>
            <a class="collapse-item {{ Request::is('CrudPembayaranGedung')? "active":""}}" href="{{url ('CrudPembayaranGedung')}}">Pembayaran Gedung</a>
          </div>
        </div>
      </li>
     
     <li class="nav-item {{ Request::is('LaporanPenyewaan')? "active":""}}">
        <a class="nav-link" href="{{url ('LaporanPenyewaan')}}">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Laporan</span>
        </a>
      </li>

      <li class="nav-item {{ Request::is('CrudGaleri')? "active":""}}">
        <a class="nav-link" href="{{url ('CrudGaleri')}}">
          <i class="far fa-fw fa-image"></i>
          <span>Galeri</span>
        </a>
      </li>
      <hr class="sidebar-divider">
            
    </ul>