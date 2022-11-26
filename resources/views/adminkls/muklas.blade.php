<!DOCTYPE html>
<html lang="en">
@include('include.head')

@include('include.loader')

<body onload="myFunction()" style="margin:0;">
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
                                                <h4 class="card-title">Data Murid</h4>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    Import Data
                                                </button>
                                                <a href="{{ route('siswaexport') }}" class="btn btn-primary">Export
                                                    Data</a>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Import
                                                                    Data</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form action="/siswaimport" method="POST"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlFile1">Input File
                                                                            Excel</label>
                                                                        <input type="file" name="file"
                                                                            class="form-control-file"
                                                                            id="exampleFormControlFile1"
                                                                            required="required">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Save</button>
                                                                </div>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <a href="{{ route('daftar') }}" class="btn btn-primary">Tambah Data</a>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tr align="center">
                                                            <th>NO</th>
                                                            <th>NIS</th>
                                                            <th>NAMA</th>
                                                            <th>JENIS KELAMIN</th>
                                                            <th>TANGGAL LAHIR</th>
                                                            <th>AKSI</th>
                                                        </tr>
                                                        @foreach ($data as $item)
                                                        <tr align="center">
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>0{{ $item->nis }}</td>
                                                            <td>{{ $item->nama }}</td>
                                                            <td>{{ $item->jkel }}</td>
                                                            <td>{{ $item->ttg }} {{ $item->bulan }} {{ $item->tahun }}
                                                            </td>
                                                            <td><a class="btne" href={{ url('edit_siswa', $item->id) }}><i
                                                                        class="fa-solid fa-pen-to-square"></i> |</a> <a
                                                                    class="btne" href={{ 'hps/' . $item['id'] }}><i
                                                                        class="fa-solid fa-trash-can"></i></a></td>
                                                        </tr>
                                                        @endforeach
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="pagination">
                                                {{ $data->links() }}
                                            </div>
                                            @include('sweetalert::alert')
                                            <!-- JavaScript Bundle with Popper -->
                                            @include('include.js')
</body>

</html>
