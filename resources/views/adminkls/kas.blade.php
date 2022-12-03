<!DOCTYPE html>
<html lang="en">
@include('include.head')

@include('include.loader')
<style>
    .kelas {
        display: flex;
        justify-content: space-between;
    }
</style>

<BODY onload="myFunction()" style="margin:0;">
    <div id="loader"></div>

    <div style="display:none;" id="myDiv" class="animate-bottom">

        <div class="container-scroller">
            <div class="row p-0 m-0 proBanner" id="proBanner">
                <div class="col-md-12 p-0 m-0"></div>
            </div>
            <!-- sidebar -->
            @include('include.sidebar')
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- navbar -->
                @include('include.nav')

                <div class="main-panel">
                    <div class="content-wrapper">

                        {{-- tabel --}}
                        <div class="main-panel">
                            <div class="content-wrapper">
                                <div class="row ">
                                    <div class="col-12 grid-margin">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="kelas">
                                                    <h4 class="card-title">Data Pembayaran Uang Kas</h4>
                                                    <div class="">
                                                        <a href="bayar" class="btn btn-outline-success">Tambah Data</a>
                                                        <a href="/kas/cetakkas" class="btn btn-outline-warning">Cetak
                                                            Kas</a>
                                                    </div>
                                                    <div class="">
                                                        <form class="form-inline" action="/kas">
                                                            <div class="form-group w-100 mb-3">
                                                                <input type="text" name="siswa"
                                                                    class="form-control mr-sm-2" id="search"
                                                                    placeholder="Masukkan nama siswa" value="{{ request('siswa') }}">
                                                                <button type="submit"
                                                                    class="btn btn-primary my-2 my-sm-0">Cari</button>
                                                            </div>
                                                        </form>
                                                        <!-- Start kode untuk form pencarian -->
                                                        @if ($message = Session::get('success'))
                                                        <div class="alert alert-success">
                                                            <p>{{ $message }}</p>
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
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
                                                        @php
                                                        $total = 0;
                                                        $keluar;
                                                        @endphp
                                                        @foreach ($uang as $item)
                                                        @php
                                                        $total = $total + $item->harga;
                                                        @endphp
                                                        <tr align="center">
                                                            <td>{{ $loop->iteration }}</td>
                                                            @if (empty($item->siswa->nis) || empty($item->siswa->nama))
                                                            <br>
                                                            @else
                                                            <td>0{{ $item->siswa->nis }}</td>
                                                            <td>{{ $item->siswa->nama }}</td>
                                                            @endif
                                                            <td>Rp.{{ number_format($item->harga), 2}}</td>
                                                            <td>{{ $item->keterangan }}</td>
                                                            @if (empty($item->created_at))
                                                            <br>
                                                            @else
                                                            <td>{{ showDateTime($item->created_at, 'l,d F Y')}}</td>
                                                            @endif
                                                            <td><a class="btne" href={{ 'hapus/' . $item['id'] }}><i
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
                                                <h4 class="card-title">Pengeluaran Kas</h4>
                                                <a href="/pengeluaran" class="btn btn-outline-danger">Masukan Pengeluaran</a>
                                                <hr>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tr>
                                                            <th>
                                                                Pemasukan Per minggu
                                                            </th>
                                                            <th>
                                                                Pengeluaran
                                                            </th>
                                                            <th>
                                                                Keterangan Pengeluaran
                                                            </th>
                                                            <th>
                                                                Jumlah
                                                            </th>
                                                        </tr>
                                                        @php
                                                        $pengeluaran = 0;
                                                        @endphp
                                                        @foreach ($keluar as $item)
                                                        @php
                                                        $pengeluaran = $total - $item->pengeluaran;
                                                        @endphp
                                                        <tr>
                                                            <td>Rp. {{ number_format($total) }}</td>
                                                            <td>Rp. {{ number_format($item->pengeluaran) }}</td>
                                                            <td>{{ $item->keterangan }}</td>
                                                            <td>Rp. {{ number_format($pengeluaran) }}</td>
                                                        </tr>
                                                        @endforeach
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
    @include('include.js')

    @include('sweetalert::alert')


</body>

</html>
