<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN GALERI SISWA</title>
    <link rel="shortcut icon" href="../img/ktpang.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/solid.min.css"
        integrity="sha512-qzgHTQ60z8RJitD5a28/c47in6WlHGuyRvMusdnuWWBB6fZ0DWG/KyfchGSBlLVeqAz+1LzNq+gGZkCSHnSd3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        @include('templet.style')


</head>
<body>
    <div id="myDiv" class="animate-bottom">
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">GALERI FOTO SISWA</h2>
                    <h3 class="section-subheading text-muted">"Dibawah ini adalah foto-foto siswa yang ada di kelas XII RPL 2"</h3>
                </div>
                <div class="row">
                    @foreach ($murid as $g)
                        <div class="col-lg-4 col-sm-6 col-md-3 mb-3">
                            <!-- Portfolio item 4-->
                            <div class="portfolio-item">
                                <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal{{ $g->id }}">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content">Baca Selengkapnya</div>
                                    </div>
                                    @if (!preg_match('/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=_|!:,.;]*[-a-z0-9+&@#\/%=_|]/i', $g->foto))
                                        <img class="img fuild" src="{{ asset('Galfot/' . $g->foto) }}" width="355px"
                                        height="250px" alt="not found" srcset="">
                                    @else
                                        <img class="img fuild" src="{{ $g->foto }}" alt="not found" width="355px"
                                        height="250px" srcset="">
                                    @endif
                                </a>
                                <div class="portfolio-caption" style="background-color: aliceblue;">
                                    <div class="portfolio-caption-heading">{{ $g->judul }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <a class="btn btn-outline-warning" style="margin-left: 37pc" href="/rpl">Kembali</a>
    </div>
        @foreach ($murid as $item)
    <div class="portfolio-modal modal fade" id="portfolioModal{{ $item->id }}" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="templet/assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h6 align="center" style="color: #8d8d8d">Nama Siswa</h6>
                                <h5 class="text-capitalize">{{ $item->siswa->nama }} </h5><br>
                                @if (!preg_match(
                                    '/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=_|!:,.;]*[-a-z0-9+&@#\/%=_|]/i',
                                    $item->foto))
                                    <img class="img fuild" src="{{ asset('Galfot/' . $item->foto) }}"
                                        width="355px" height="250px"alt="not found" srcset="">
                                @else
                                    <img class="img fuild" src="{{ $item->foto }}" width="355px"
                                        height="250px"alt="not found" srcset="">
                                @endif
                                <h6 align="center" style="color: #8d8d8d">Keterangan</h6>
                                <p>{{ $item->ket }}</p>
                                <table class="table">
                                    <tr align="center">
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Nama Buku</th>
                                        <th>Tanggal Peminjaman buku</th>
                                    </tr>
                                    <h3>Peminjaman Buku Perpustakaan</h3>
                                    <hr>
                                    @foreach ($buku as $item)
                                        <tr align="center">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->siswa->nama }}</td>
                                            <td>{{$item->nmbuku}}</td>
                                            <td>{{ showDateTime($item->created_at, 'l,d F Y')}}</td>
                                        </tr>
                                    @endforeach
                                </table>
                                <button class="btn btn-outline-warning" data-bs-dismiss="modal"
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
    </section>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script>
        var myVar;

        function myFunction() {
            myVar = setTimeout(showPage, 1000);
        }

        function showPage() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("myDiv").style.display = "block";
        }
    </script>
    @include('sweetalert::alert')
</body>

</html>
