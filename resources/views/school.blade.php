                                                                                                <!DOCTYPE html>
                                                                                                <html lang="en">

                                                                                                <head>
                                                                                                    <meta charset="UTF-8">
                                                                                                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                                                                                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                                                                                    <title>HOME | SMKN 1 KATAPANG</title>
                                                                                                    <link rel="shortcut icon" href="../img/ktpang.png" type="image/x-icon">
                                                                                                    @include('template.style')
                                                                                                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
                                                                                                        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
                                                                                                        crossorigin="anonymous" referrerpolicy="no-referrer" />
                                                                                                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/solid.min.css"
                                                                                                        integrity="sha512-qzgHTQ60z8RJitD5a28/c47in6WlHGuyRvMusdnuWWBB6fZ0DWG/KyfchGSBlLVeqAz+1LzNq+gGZkCSHnSd3g=="
                                                                                                        crossorigin="anonymous" referrerpolicy="no-referrer" />
                                                                                                </head>

                                                                                                <body>
                                                                                                    @include('template.nav')
                                                                                                    <!-- Masthead-->
                                                                                                    <header class="masthead">
                                                                                                        <div class="container">
                                                                                                            <div class="masthead-subheading"><b>Selamat Datang di SMKN 1 Katapang</b></div>
                                                                                                            <div class="masthead-heading text-uppercase">SMK TERBAIK DAN LULUSAN SIAP KERJA</div>
                                                                                                            <a class="btn btn-dark btn-xl text-uppercase" href="#about">Tentang Kami</a>
                                                                                                        </div>
                                                                                                    </header>
                                                                                                    <!-- Services-->
                                                                                                    <section class="page-section " id="services">
                                                                                                        <div class="container">
                                                                                                            <div class="text-center">
                                                                                                                <h2 class="section-heading text-uppercase">KOMPETENSI FAVORIT</h2>
                                                                                                                <h3 class="section-subheading">KOMPETENSI BERIKUT INI ADALAH JURUSAN TERBAIK YANG ADA DI SMKN 1 KATAPANG
                                                                                                                </h3>
                                                                                                            </div>
                                                                                                            <div class="row text-center">
                                                                                                                @foreach ($foto as $f)
                                                                                                                    <div class="col-md-4">
                                                                                                                        @if (!preg_match('/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i', $f->gambar))
                                                                                                                            <img class="img fuild" src="{{ asset('image/' . $f->gambar) }}" width="220px"
                                                                                                                                height="200px" alt="not found" srcset="">
                                                                                                                        @else
                                                                                                                            <img class="img fuild" src="{{ $f->gambar }}" width="220px" height="200px"
                                                                                                                                alt="not found" srcset="">
                                                                                                                        @endif
                                                                                                                        <h4 class="my-3">{{ $f->judul }}</h4>
                                                                                                                        <p>{{ $f->keterangan }}</p>
                                                                                                                    </div>
                                                                                                                @endforeach
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </section>
                                                                                                    <!-- Portfolio sekolah-->
                                                                                                    <section class="page-section bg-light" id="portfolio">
                                                                                                        <div class="container">
                                                                                                            <div class="text-center">
                                                                                                                <h2 class="section-heading text-uppercase">Galeri Sekolah</h2>
                                                                                                                <h3 class="section-subheading ">"School is the marketplace of possibility, not efficiency."</h3>
                                                                                                            </div>
                                                                                                            <div class="row">
                                                                                                                @foreach ($gal as $g)
                                                                                                                    <div class="col-lg-4 col-sm-6 col-md-3 mb-3">
                                                                                                                        <div class="portfolio-item">
                                                                                                                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal{{ $g->id }}">
                                                                                                                                <div class="portfolio-hover">
                                                                                                                                    <div class="portfolio-hover-content">Baca Selengkapnya</div>
                                                                                                                                </div>
                                                                                                                                @if (!preg_match('/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i', $g->foto))
                                                                                                                                    <img class="img fuild" src="{{ asset('image/' . $g->foto) }}" width="355px"
                                                                                                                                        height="250px"alt="not found" srcset="">
                                                                                                                                @else
                                                                                                                                    <img class="img fuild" src="{{ $g->foto }}" width="355px"
                                                                                                                                        height="250px"alt="not found" srcset="">
                                                                                                                                @endif
                                                                                                                            </a>
                                                                                                                            <div class="portfolio-caption" style="background-color: aliceblue;">
                                                                                                                                <div class="portfolio-caption-heading">{{ $g->jud }}</div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                @endforeach
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </section>
                                                                                                    <!-- About-->
                                                                                                    <section class="page-section" id="about">
                                                                                                        <div class="container">
                                                                                                            <div class="text-center">
                                                                                                                <h2 class="section-heading text-uppercase">Sejarah Singkat</h2>
                                                                                                                <h3 class="section-subheading">The future belongs to those who believe in the beauty of their dreams.
                                                                                                                </h3>
                                                                                                            </div>
                                                                                                            <ul class="timeline">
                                                                                                                <li>
                                                                                                                    <div class="timeline-image"><img class="rounded-circle img-fluidd"
                                                                                                                            src="templet/assets/img/about/1.jpg" alt="..." /></div>
                                                                                                                    <div class="timeline-panel">
                                                                                                                        <div class="timeline-heading">
                                                                                                                            <h4>Tahun 1999</h4>
                                                                                                                        </div>
                                                                                                                        <div class="timeline-body">
                                                                                                                            <p>SMKN 1 Katapang dengan nama SMKN 4 Soreang. Unit Gedung Baru (UGB) SMKN 1 Katapang
                                                                                                                                dibangun dari dana proyek LOAN OCF yang merupakan bantuan Pemerintah Jepang.</p>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </li>
                                                                                                                <li class="timeline-inverted">
                                                                                                                    <div class="timeline-image"><img class="rounded-circle img-fluidd"
                                                                                                                            src="templet/assets/img/about/1.jpg" alt="..." /></div>
                                                                                                                    <div class="timeline-panel">
                                                                                                                        <div class="timeline-heading">
                                                                                                                            <h4>Tahun Pelajaran 1999/2000</h4>
                                                                                                                        </div>
                                                                                                                        <div class="timeline-body">
                                                                                                                            <p>Mulai menerima siswa baru untuk Program Keahlian Teknologi Penyempurnaan Tekstil, Teknik
                                                                                                                                Elektro dan Mesin Perkakas (pendaftar ada 150 dan yang diterima 144 orang siswa), pada
                                                                                                                                waktu itu KBM dilaksanakan di SMPN 1 Katapang.</p>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <div class="timeline-image"><img class="rounded-circle img-fluidd"
                                                                                                                            src="templet/assets/img/about/1.jpg" alt="..." /></div>
                                                                                                                    <div class="timeline-panel">
                                                                                                                        <div class="timeline-heading">
                                                                                                                            <h4>Tahun Pelajaran 2000/2001</h4>
                                                                                                                        </div>
                                                                                                                        <div class="timeline-body">
                                                                                                                            <p>SMKN 4 Soreang mulai menempati Unit Gedung Baru yang berlokasi di Jalan Ceuri Terusan
                                                                                                                                Kopo KM 13,5 Desa Katapang, Kecamatan Katapang Kabupaten Bandung.</p>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </li>
                                                                                                                <li class="timeline-inverted">
                                                                                                                    <div class="timeline-image"><img class="rounded-circle img-fluidd"
                                                                                                                            src="templet/assets/img/about/1.jpg" alt="..." /></div>
                                                                                                                    <div class="timeline-panel">
                                                                                                                        <div class="timeline-heading">
                                                                                                                            <h4>Tahun 2000</h4>
                                                                                                                        </div>
                                                                                                                        <div class="timeline-body">
                                                                                                                            <p>Pada waktu peresmian UGB SMKN 1 Katapang yang dihadiri oleh pejabat dari Dinas Pendidikan
                                                                                                                                Provinsi dan Kabupaten, Pemerintah setempat dan tokoh masyarakat setempat pada tahun
                                                                                                                                2000, disepakati nama SMKN 4 Soreang menjadi SMKN 4 Katapang atas keinginan dari tokoh
                                                                                                                                masyarakat bahwa nama SMKN 4 Soreang kurang sesuai karena berada di Kecamatan Katapang.
                                                                                                                            </p>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <div class="timeline-image"><img class="rounded-circle img-fluidd"
                                                                                                                            src="templet/assets/img/about/1.jpg" alt="..." /></div>
                                                                                                                    <div class="timeline-panel">
                                                                                                                        <div class="timeline-heading">
                                                                                                                            <h4>Akhir Tahun 2000</h4>
                                                                                                                        </div>
                                                                                                                        <div class="timeline-body">
                                                                                                                            <p>Keluar Surat Keputusan Ditpsmk Jakarta Nomor: 217/O/2000, tanggal 17 Nopember 2000,
                                                                                                                                tentang pembukaan Sekolah yang menetapkan nama sekolah yang dulu bernama SMKN 4 Soreang
                                                                                                                                secara resmi adalah SMKN 1 Katapang Kabupaten Bandung.</p>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </li>
                                                                                                                <li class="timeline-inverted">
                                                                                                                    <div class="timeline-image"><img class="rounded-circle img-fluidd"
                                                                                                                            src="templet/assets/img/about/1.jpg" alt="..." /></div>
                                                                                                                    <div class="timeline-panel">
                                                                                                                        <div class="timeline-heading">
                                                                                                                            <h4>Tahun 2001</h4>
                                                                                                                        </div>
                                                                                                                        <div class="timeline-body">
                                                                                                                            <p> Sejak tahun 2001 sampai sekarang siswa – siswa SMKN 1 Katapang banyak meraih prestasi
                                                                                                                                terutama untuk perlombaan pramuka, baik tingkat Kabupaten Bandung maupun Provinsi Jawa
                                                                                                                                Barat. Selain itu siswa - siswi SMKN 1 Katapang juga sering mewakili Kabupaten Bandung
                                                                                                                                dalam LKS tingkat Provinsi dan Nasional.</p>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </li>
                                                                                                                <li class="timeline-inverted">
                                                                                                                    <div class="timeline-image">
                                                                                                                        <h4>
                                                                                                                            Be Part
                                                                                                                            <br />
                                                                                                                            Of Our
                                                                                                                            <br />
                                                                                                                            Story!
                                                                                                                        </h4>
                                                                                                                    </div>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </section>
                                                                                                    <section class="page-section" id="kelas">
                                                                                                        <div class="container">
                                                                                                            <div class="text-center">
                                                                                                                <h2 class="section-heading text-uppercase">kelas-kelas</h2>
                                                                                                                <h3 class="section-subheading">KELAS-KELAS BERIKUT INI ADALAH KELAS-KELAS YANG ADA DI SMKN 1 KATAPANG
                                                                                                                </h3>
                                                                                                            </div>
                                                                                                            <div class="row text-center">
                                                                                                                <div class="col-md-4">
                                                                                                                    <a href="{{ route('rpl') }}">
                                                                                                                        <img class="img fuild" src="../rpl.png" width="220px" height="200px" alt="not found"
                                                                                                                            srcset="">
                                                                                                                        <h4 class="my-3" style="color: black">XI RPL 2</h4>
                                                                                                                    </a>
                                                                                                                </div>
                                                                                                                <div class="col-md-4">
                                                                                                                    <a href="###">
                                                                                                                        <img class="img fuild" src="../multi.png" width="220px" height="200px" alt="not found"
                                                                                                                            srcset="">
                                                                                                                        <h4 class="my-3" style="color: black">XI MM 2</h4>
                                                                                                                    </a>
                                                                                                                </div>
                                                                                                                <div class="col-md-4">
                                                                                                                    <a href="###">
                                                                                                                        <img class="img fuild" src="../tkj.png" width="220px" height="200px" alt="not found"
                                                                                                                            srcset="">
                                                                                                                        <h4 class="my-3" style="color: black">XI TKJ 2</h4>
                                                                                                                    </a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        </div>
                                                                                                    </section>
                                                                                                    @include('template.tim')
                                                                                                    @include('template.contact')
                                                                                                    @include('template.footer')
                                                                                                    <!-- Portfolio Modals-->
                                                                                                    <!-- Portfolio item 1 modal popup-->
                                                                                                    @foreach ($gal as $item)
                                                                                                        <div class="portfolio-modal modal fade" id="portfolioModal{{ $item->id }}" tabindex="-1"
                                                                                                            role="dialog" aria-hidden="true">
                                                                                                            <div class="modal-dialog">
                                                                                                                <div class="modal-content">
                                                                                                                    <div class="close-modal" data-bs-dismiss="modal"><img src="templet/assets/img/close-icon.svg"
                                                                                                                            alt="Close modal" /></div>
                                                                                                                    <div class="container">
                                                                                                                        <div class="row justify-content-center">
                                                                                                                            <div class="col-lg-8">
                                                                                                                                <div class="modal-body">
                                                                                                                                    <!-- Project details-->
                                                                                                                                    <h2 class="text-uppercase">{{ $item->jud }}</h2><br>
                                                                                                                                    @if (!preg_match(
                                                                                                                                        '/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i',
                                                                                                                                        $item->foto))
                                                                                                                                        <img class="img fuild" src="{{ asset('image/' . $item->foto) }}"
                                                                                                                                            width="355px" height="250px"alt="not found" srcset="">
                                                                                                                                    @else
                                                                                                                                        <img class="img fuild" src="{{ $item->foto }}" width="355px"
                                                                                                                                            height="250px"alt="not found" srcset="">
                                                                                                                                    @endif
                                                                                                                                    <p>{{ $item->ket }}</p>
                                                                                                                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                                                                                                                        type="button">
                                                                                                                                        <i class="fas fa-xmark me-1"></i>
                                                                                                                                        TUTUP
                                                                                                                                    </button>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    @endforeach
                                                                                                    <button onclick="topFunction()" id="myBtn" title="Kembali ke atas"><i
                                                                                                            class="fa-solid fa-angles-up"></i></button>
                                                                                                    <script src="../templet/js/top.js"></script>
                                                                                                    @include('template.js')
                                                                                                </body>

                                                                                                </html>
