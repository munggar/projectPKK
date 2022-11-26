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
        <li class="nav-item menu-items {{ Request::is('wali') ? 'active' : '' }}">
            <a class="nav-link" href="/wali">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item menu-items {{ Request::is('keuangan') ? 'active' : '' }}">
            <a class="nav-link" href="/keuangan">
                <span class="menu-icon">
                    <i class="mdi mdi-coin"></i>
                </span>
                <span class="menu-title">Kas Siswa</span>
            </a>
        </li>

        <li class="nav-item menu-items {{ Request::is('daftar_siswa') ? 'active' : '' }}">
            <a class="nav-link" href="/daftar_siswa">
                <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">Daftar Siswa</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#dropdown" aria-expanded="false"
                aria-controls="ui-basic">
                <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">Mata Pelajaran</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="dropdown">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/pelajaran_adaptif">Adaptif dan Normatif</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="/pelajaran_kejuruan">Kejuruan</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/jadwalpelajaran">Jadwal Pelajaran</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items {{ Request::is('peminjaman_buku') ? 'active' : '' }}   ">
            <a class="nav-link" href="/peminjaman_buku">
                <span class="menu-icon">
                    <i class="mdi mdi-contacts"></i>
                </span>
                <span class="menu-title">Data Peminjaman Buku</span>
            </a>
        </li>


        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-controls="ui-basic">
                <span class="menu-icon">
                    <i class="mdi mdi-folder-image"></i>
                </span>
                <span class="menu-title">Foto - Foto</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/galeri_murid">Galeri Murid</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/galeri_guru">Galeri Guru</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
