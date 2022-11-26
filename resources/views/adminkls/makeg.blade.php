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

                    <!-- Button trigger modal -->
                    <button type="button" style="position:relative; top:497px; left:323px" class="btn btn-primary"
                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Import Data
                    </button>
                    <a href="{{ route('mapelexport') }}" style="position:relative; top:497px; left:330px"
                        class="btn btn-primary">Export Data</a>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Import</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="{{ route('mapelimport') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Input File Excel</label>
                                            <input type="file" name="file" class="form-control-file"
                                                id="exampleFormControlFile1" required="required">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>

                    <a href="/mapke" style="position:relative; top:497px; left:336px"
                        class="btn btn-primary">Tambah Data</a>
                        <div class="main-panel">
                            <div class="content-wrapper">
                              <div class="row ">
                                <div class="col-12 grid-margin">
                                  <div class="card">
                                    <div class="card-body">
                                      <h4 class="card-title">Pelajaran Kejuruan</h4>
                                      <div class="table-responsive">
                                        <table class="table">
                        <tr align="center">
                            <th>NO</th>
                            <th>Judul</th>
                            <th>Foto</th>
                            <th>Keterangan</th>
                            <th style="width: 100px">AKSI</th>
                        </tr>
                        @foreach ($makeg as $f)
                            <tr align="center">
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    @if (!preg_match('/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i', $f->gambar))
                                        <img class="img fuild" src="{{ asset('Matpel/' . $f->gambar) }}"
                                            width="80px" height="80px" alt="not found" srcset="">
                                    @else
                                        <img class="img fuild" src="{{ $f->gambar }}" width="80px"
                                            height="80px" alt="not found" srcset="">
                                    @endif
                                </td>
                                <td>{{ $f->judul }}</td>
                                <td>{{ $f->keterangan }}</td>
                                <td><a class="btne" href={{ url('madit', $f->id) }}><i
                                            class="fa-solid fa-pen-to-square"></i></a> |</a> <a class="btne"
                                        href={{ 'haps/' . $f['id'] }}><i class="fa-solid fa-trash-can"></i></a></td>
                            </tr>
                        @endforeach
                </div>
            </div>
        </div>

    </div>
                {{-- js --}}
                @include('include.js')
    @include('sweetalert::alert')
</body>

</html>
