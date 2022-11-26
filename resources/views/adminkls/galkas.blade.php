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

                        <div class="main-panel">
                            <div class="content-wrapper">
                                <div class="row ">
                                    <div class="col-12 grid-margin">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Galeri Kelas</h4>
                                                <a href="/fotosiswa" class="btn btn-primary">Tambah Data</a>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tr align="center">
                                                            <th>NO</th>
                                                            <th>Foto</th>
                                                            <th>Nama Siswa</th>
                                                            <th>Keterangan</th>
                                                            <th>AKSI</th>
                                                        </tr>
                                                        @foreach ($murid as $f)
                                                        <tr align="center">
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>
                                                                <img class="img fuild"
                                                                    src="{{ asset ('Galfot/' . $f->foto) }}"
                                                                    width="80px" height="80px" alt="not found"
                                                                    srcset="">
                                                            </td>
                                                            <td>{{ $f->siswa->nama }}</td>
                                                            <td>@if ( substr($f->ket, 60))
                                                                <h5>...</h5>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-primary"
                                                                    data-toggle="modal" data-target="#exampleModal2">
                                                                    Tampilkan ...
                                                                </button>
                                                                @else
                                                                {{ $f->ket }}
                                                                @endif</td>
                                                            <td><a class="btne" href={{ url('eddit', $f->id) }}><i
                                                                        class="fa-solid fa-pen-to-square"></i></a> | <a
                                                                    class="btne" href={{ url('pus', $f->id) }}><i
                                                                        class="fa-solid fa-trash-can"></i></a></td>
                                                        </tr>
                                                        @endforeach
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="pagination">
                                                {{ $murid->links() }}
                                            </div>
                                            {{-- js --}}
                                            @include('include.js')

                                            @include('sweetalert::alert')

</body>

</html>

<!-- Modal -->
@foreach ($murid as $item)

<div class="modal fade" id="exampleModal2" tabindex="-1"
role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title"
            id="exampleModalLabel">
           {{ $item->siswa->nama }}</h5>
            <button type="button" class="close"
            data-dismiss="modal"
            aria-label="Close">
            <span
            aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <p>
                {{ $item->ket }}
            </p>
        </div>
        <div class="modal-footer">
            <button type="button"
                class="btn btn-secondary"
                data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</div>
@endforeach
