<!DOCTYPE html>
<html lang="en">
@include('templet.head')

@include('templet.loader')

<BODY onload="myFunction()" style="margin:0;">
    <div id="loader"></div>

    <div style="display:none;" id="myDiv" class="animate-bottom">

        <div class="container-scroller">
            <div class="row p-0 m-0 proBanner" id="proBanner">
                <div class="col-md-12 p-0 m-0"></div>
            </div>
            <!-- sidebar -->
            @include('templet.sidebar')
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- navbar -->
                @include('templet.nav')

                <div class="main-panel">
                    <div class="content-wrapper">

                        {{-- tabel --}}
                        <div class="main-panel">
                            <div class="content-wrapper">
                                <div class="row ">
                                    <div class="col-12 grid-margin">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Data Pembayaran Uang Kas</h4>    
                                                <a href="cetakkas" class="btn btn-outline-warning">Cetak Kas</a>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tr align="center">
                                                            <th>No.</th>
                                                            <th>NIS</th>
                                                            <th>Nama</th>
                                                            <th>Pembayaran</th>
                                                            <th>Keterangan</th>
                                                            <th>Tanggal Pembayaran</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                        @foreach ($uang as $item)
                                                        <tr align="center">
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>0{{ $item->siswa->nis }}</td>
                                                            <td>{{ $item->siswa->nama }}</td>
                                                            <td>Rp.{{ number_format($item->harga), 2}}</td>
                                                            <td>{{ $item->keterangan }}</td>
                                                            <td>{{ showDateTime($item->created_at, 'l,d F Y')}}</td>
                                                                    <td><a class="btne"
                                                                    href={{ 'hapus/' . $item['id'] }}><i
                                                                        class="fa-solid fa-trash-can"></i></a></td>
                                                        </tr>
                                                        @endforeach
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="pagination">
                                                {{ $uang->links() }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title"></h4>
                                                <div class="table-responsive">
                                                <table class="table">
                                                    <tr>
                                                        <th>
                                                            Pemasukan Per minggu
                                                        </th>
                                                        <th>
                                                            Pengeluaran
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td>asd</td>
                                                        <td>asd</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
                                                        {{-- js --}}
    @include('templet.js')

                                            @include('sweetalert::alert')


</body>

</html>
