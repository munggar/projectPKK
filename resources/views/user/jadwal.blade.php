<!DOCTYPE html>
<html lang="en">

<head>
    @include('template.style')
    <title>XII RPL 2 - Jadwal dan Mapel</title>
</head>

<body>
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#top" class="logo">
                            XII RPL 2
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="/rpl">Beranda</a></li>
                            <li><a href="/rpl/#meetings">Galeri</a></li>
                            <li class="has-sub">
                                <a href="javascript:void(0)">MataPel & Kegiatan</a>
                                <ul class="sub-menu">
                                    <li><a href="/jadwal&kegiatan">Normatif dan Adaptif</a></li>
                                    <li><a href="/jadwal&kegiatan">Kejuruan</a></li>
                                    <li><a href="/jadwal&kegiatan">Jadwal Pelajaran</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="/rpl/#kas">Keuangan</a></li>
                            <li class="scroll-to-section"><a href="/rpl/#contact">Kontak Kami</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- ***** Header Area End ***** -->

    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>Pada Halaman Ini terdapat</h6>
                    <h2>Jadwal Pelajaran & Mata Pelajaran</h2>
                </div>
            </div>
        </div>
    </section> <br> <br>
    <div class="col-lg-12 container">
        <div class="row">

            {{-- Adaptif dan Normatif --}}
            <div class="col-lg-4 templatemo-item-col"> <br>
                <div class="meeting-item">
                    @foreach ($adaptif as $item)
                    <div class="thumb">
                        <a href="/pelajaran_adaptif/{{ $item->id }}"><img src="{{ asset('Adaptif/' . $item->gambar) }}"
                                alt=""></a>
                    </div>
                    <div class="down-content">
                        <a href="/pelajaran_adaptif/{{ $item->id }}">
                            <h4>{{ $item->judul }}</h4>
                        </a>
                        <p> @if ( substr($item->keterangan, 60)) Klik untuk lihat selengkapnya ...
                            @else {{ $item->keterangan }}
                            @endif</p>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- jadwal pelajaran --}}
            <div class="col-lg-4 templatemo-item-col">
                @foreach ($jadwal as $item)
                <div class="meeting-item">
                    <div class="thumb">
                        <a href="/jadwal_pelajaran/{{ $item->id }}"><img
                                src="{{ asset('jadwal_pelajaran/' . $item->foto) }}" alt=""></a>
                    </div>
                    <div class="down-content">
                        <a href="/jadwal_pelajaran/{{ $item->id }}">
                            <h4>{{ $item->hari }}</h4>
                        </a>
                        <p> @if ( substr($item->keterangan, 60)) Klik untuk lihat selengkapnya ...
                            @else {{ $item->keterangan }}
                            @endif</p>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Kejuruan --}}
            <div class="col-lg-4 templatemo-item-col">
                <div class="meeting-item">
                    @foreach ($kejuruan as $item)
                    <div class="thumb">
                        <a href="/pelajaran_produktif/{{ $item->id }}"><img src="{{ asset('Matpel/' . $item->gambar) }}"
                                alt=""></a>
                    </div>
                    <div class="down-content">
                        <a href="//pelajaran_produktif/{{ $item->id }}">
                            <h4>{{ $item->judul }}</h4>
                        </a>
                        <p> @if ( substr($item->keterangan, 60)) Klik untuk lihat selengkapnya ...
                            @else {{ $item->keterangan }}
                            @endif</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved.
            <br>Design: <a href="https://templatemo.com/page/1" target="_parent"
                title="website templates">TemplateMo</a></p>
    </div>
    </section>


    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    @include('template.js')
</body>

</html>
