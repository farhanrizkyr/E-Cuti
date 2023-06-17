 <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">

    @if(Auth::user()->role=='admin')
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        <div class="sidebar-brand-icon">
          <img src="{{asset('master')}}/img/logo/logo2.png">
        </div>
        <div class="sidebar-brand-text mx-3">E-Cuti</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
       Menu Admin
      </div>
     
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fas fa-fw fa-columns"></i>
          <span>Menu</span>
        </a>
        <div id="collapsePage" class="collapse show" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub Menu</h6>
            <a class="collapse-item" href="/pemberitahuan">Pemberitahuan</a>
            <a class="collapse-item" href="register-akun">Register</a>
            <a class="collapse-item" href="history-aktivity">History Aktivity</a>
          </div>
        </div>
      </li>
      @endif

        @if(Auth::user()->role=='staff')
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        <div class="sidebar-brand-icon">
          <img src="{{asset('master')}}/img/logo/logo2.png">
        </div>
        <div class="sidebar-brand-text mx-3">E-Cuti</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
       Menu Admin
      </div>
     
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fas fa-fw fa-columns"></i>
          <span>Menu</span>
        </a>
        <div id="collapsePage" class="collapse show" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub Menu</h6>
            <a class="collapse-item" href="/pemberitahuan">Pemberitahuan</a>
            <a class="collapse-item" href="register-akun">Register</a>
            <a class="collapse-item" href="history-aktivity">History Aktivity</a>
          </div>
        </div>
      </li>
      @endif
  @if(Auth::user()->role=='pegawai')
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        <div class="sidebar-brand-icon">
          <img src="{{asset('master')}}/img/logo/logo2.png">
        </div>
        <div class="sidebar-brand-text mx-3">E-Cuti</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
       Menu Admin
      </div>
     
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fas fa-fw fa-columns"></i>
          <span>Menu</span>
        </a>
        <div id="collapsePage" class="collapse show" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub Menu Pegawai</h6>
            <a class="collapse-item" href="/pegawai-pengajuan-cuti">Pengajuan Cuti</a>
            <a class="collapse-item" href="register-akun">Register</a>
            <a class="collapse-item" href="history-aktivity">History Aktivity</a>
          </div>
        </div>
      </li>
      @endif
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>