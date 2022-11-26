<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="#"><img src="../img/logo-big.png" alt="logo"
                style="width: 220px;height: 180px;" /></a>
        <a class="sidebar-brand brand-logo-mini" href="#"><img src="../img/ktpang.png" alt="logo"
                style="width: 50px; height:50px" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="{{asset('User/'.Auth::getUser()->foto)}}" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">{{ Auth::getUser()->username }}</h5>
                        <span>{{ Auth::getUser()->email }}</span>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item menu-items {{ Request::is('kls') ? 'active' : '' }}">
            <a class="nav-link" href="/kls">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item menu-items {{ Request::is('kas') ? 'active' : '' }}">
            <a class="nav-link" href="/kas">
                <span class="menu-icon">
                    <i class="mdi mdi-coin"></i>
                </span>
                <span class="menu-title">Kas Siswa</span>
            </a>
        </li>

        <li class="nav-item menu-items {{ Request::is('muklas') ? 'active' : '' }}">
            <a class="nav-link" href="/muklas">
                <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">Daftar Siswa</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic1" aria-expanded="false"
                aria-controls="ui-basic">
                <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">Mata Pelajaran</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic1">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/adaptiff">Adaptif dan Normatif</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="/matapel">Kejuruan</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/jadwalpel">Jadwal Pelajaran</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items {{ Request::is('pinjam') ? 'active' : '' }}   ">
            <a class="nav-link" href="/pinjam">
                <span class="menu-icon">
                    <i class="mdi mdi-contacts"></i>
                </span>
                <span class="menu-title">Data Peminjaman Buku</span>
            </a>
        </li>
        
        <li class="nav-item menu-items {{ Request::is('data') ? 'active' : '' }}">
            <a class="nav-link" href="/data">
                <span class="menu-icon">
                    <i class="mdi mdi-account-box"></i>
                </span>
                <span class="menu-title">Data Akun</span>
            </a>
        </li>
        
        <li class="nav-item menu-items {{ Request::is('masukan') ? 'active' : '' }}">
            <a class="nav-link" href="/masukan">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Masukan</span>
            </a>
        </li>
        
        <li class="nav-item menu-items {{ Request::is('#ui-basic') ? 'active' : '' }}">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic"
                aria-controls="ui-basic">
                <span class="menu-icon">
                    <i class="mdi mdi-folder-image"></i>
                </span>
                <span class="menu-title">Foto - Foto</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/galkas">Galeri Murid</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/galerigur">Galeri Guru</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>