  <!DOCTYPE html>
  <html lang="en">

  <head>
      @include('template.style')
  </head>
  <!-- ***** Header Area ***** -->
  @include('template.header')

  <!-- ***** Main Banner Area Start ***** -->
  @include('template.main')

  <section class="services">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="owl-service-item owl-carousel">

                    @foreach ($masukan as $item)
                      <div class="item">
                          <div class="icon">
                              <img src="../images1/service-icon-01.png" alt="">
                          </div>
                          <div class="down-content">
                              <h4>{{ $item->nama }}</h4>
                              <p>{{ \Illuminate\Support\Str::limit($item->masukan, 100, ' lihat selengkapnya ... ') }}</p>
                          </div>
                      </div>
                      @endforeach

                  </div>
              </div>
          </div>
      </div>
  </section>

  {{-- jadwal pelajaran --}}
  <section class="upcoming-meetings" id="meetings">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="section-heading">
                      <h2>Jadwal Pelajaran & Kegiatan</h2>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="categories">
                      <h4>Jadwal Pelajaran
                          <br>XII RPL 2</h4>
                      <ul>
                          <li><a href="/jadwal&kegiatan">Senin</a></li><br>
                          <li><a href="/jadwal&kegiatan">Selasa</a></li><br>
                          <li><a href="/jadwal&kegiatan">Rabu</a></li><br>
                          <li><a href="/jadwal&kegiatan">Kamis</a></li><br>
                          <li><a href="/jadwal&kegiatan">Jumat</a></li><br>
                      </ul>
                      <div class="main-button-red">
                          <a href="/jadwal&kegiatan">Semua Detail Pelajaran</a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-8">
                  <div class="row">
                      <div class="col-lg-6">
                          <div class="meeting-item">
                              <div class="thumb">
                                  <a href="/jadwal&kegiatan"><img src="../images1/meeting-01.jpg" alt="New Lecturer Meeting"></a>
                              </div>
                              <div class="down-content">
                                  <a href="/jadwal&kegiatan">
                                      <h4>Kegiatan Senin</h4>
                                  </a>
                                  <p>Kelas XII mengadakan upacara tiap 2 minggu sekali.</p>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="meeting-item">
                              <div class="thumb">
                                  <a href="/jadwal&kegiatan"><img src="../images1/meeting-02.jpg" alt="Online Teaching"></a>
                              </div>
                              <div class="down-content">
                                  <a href="/jadwal&kegiatan">
                                      <h4>Pelajaran Kejuruan</h4>
                                  </a>
                                  <p>Pelajaran Kejuruan ini dilakukan di bengkel RPL.</p>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="meeting-item">
                              <div class="thumb">
                                  <a href="/jadwal&kegiatan"><img src="../images1/meeting-03.jpg" alt="Higher Education"></a>
                              </div>
                              <div class="down-content">
                                  <a href="meeting-details.html">
                                      <h4>Pelajaran Normatif</h4>
                                  </a>
                                  <p>Pelajaran Normatif ini dilakukan di ruangan masing masing.</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  {{-- Galeri Kelas --}}
  <section class="upcoming-meetings1">
      <div class="container" id="meetings">
          <div class="row">
              <div class="col-lg-12">
                  <div class="section-heading">
                      <h2 align="center">Galeri Kelas</h2>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="meeting-item">
                      <div class="thumb">
                          <a href="{{route('murid')}}"><img src="../images1/siswa.jpg" alt="New Lecturer Meeting"></a>
                      </div>
                      <div class="down-content">
                          <a href="{{route('murid')}}">
                              <h4>Galeri Foto Siswa</h4>
                          </a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="meeting-item">
                      <div class="thumb">
                          <a href="/galeriguru"><img src="../images1/guru.jpg" alt="Online Teaching"></a>
                      </div>
                      <div class="down-content">
                          <a href="/galeriguru">
                              <h4>Galeri Foto Guru</h4>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  {{-- mapel --}}
  <section class="our-courses" id="courses">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="section-heading">
                      <h2 align="center">Mata Pelajaran Normatif dan Adaptif</h2>
                  </div>
              </div>
              <div class="col-lg-12">
                  <div class="owl-courses-item owl-carousel">
                      @foreach ($adaptif as $item)
                      <div class="item">
                          <img class="img fuild" src="{{ asset('Adaptif/' . $item->gambar) }}" alt="not found"
                              srcset="">
                          <div class="down-content">
                              <h4>{{ $item->judul }}</h4>
                          </div>
                      </div>
                      @endforeach
                  </div>
              </div>
              <section class="our-courses" id="courses1">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-12">
                              <div class="section-heading">
                                  <h2 align="center">Mata Pelajaran Kejuruan</h2>
                              </div>
                          </div>
                          <div class="col-lg-12">
                              <div class="owl-courses-item owl-carousel">
                                  @foreach ($kejuruan as $item)
                                  <div class="item">
                                      <img class="img fuild" src="{{ asset('Matpel/' . $item->gambar) }}"
                                          alt="not found" srcset="">
                                      <div class="down-content">
                                          <h4>{{ $item->judul }}</h4>
                                      </div>
                                  </div>
                                  @endforeach
                              </div>
                          </div>
                      </div>
                  </div>
          </div>
      </div>
  </section>

  {{-- keuangan kas --}}
  <section class="our-facts" id="kas">
      <center>
          <h2 class="section-heading">Tabel Kas</h2>
          <h4 class="section-subheading" style="color: white">"Tabel data ini akan di riset setiap minggunya"</h4>
      </center>
      <div class="table-responsive card-body radius">
          <table class="table table-secondary table-hover table-bordered border-secondary">
              <tr align="center">
                  <th>NAMA</th>
                  <th>NOMINAL</th>
                  <th>TANGGAL PEMBAYARAN</th>
                  <th>KETERANGAN</th>
              </tr>
              @foreach ($uang as $item)
              <tr align="center">
                  <td>{{ $item->siswa->nama }}</td>
                  <td>Rp.{{ number_format($item->harga), 2}}</td>
                  <td>{{ showDateTime($item->created_at, 'l,d F Y')}}</td>
                  <td>{{ $item->keterangan }}</td>
              </tr>
              @endforeach
          </table>
      </div>
  </section>
  @include('sweetalert::alert')
  {{-- contact --}}
  @include('template.contact')
  {{-- js --}}
  @include('template.js')
  </body>

  </html>
