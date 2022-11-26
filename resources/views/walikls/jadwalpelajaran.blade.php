<!DOCTYPE html>
<html lang="en">
@include('templet.head')

@include('templet.loader')

<body onload="myFunction()" style="margin:0;">
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
                        <div class="main-panel">
                            <div class="content-wrapper">
                                <div class="row ">
                                    <div class="col-12 grid-margin">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Jadwal Pelajaran</h4>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tr align="center">
                                                            <th>Foto</th>
                                                            <th>Hari</th>
                                                            <th>Nama Pelajaran</th>
                                                            <th>Guru</th>
                                                            <th>Keterangan</th>
                                                            <th style="width: 100px">AKSI</th>
                                                        </tr>
                                                        @foreach ($jadwal as $f)
                                                        <tr align="center">
                                                            <td>
                                                                <img class="img fuild"
                                                                    src="{{ asset('jadwal_pelajaran/' . $f->foto) }}"
                                                                    width="80px" height="80px" alt="not found"
                                                                    srcset="">
                                                            </td>
                                                            <td>{{ $f->hari }}</td>
                                                            <td>{{ $f->pelajaran }}</td>
                                                            <td>{{ $f->guru }}</td>
                                                            <td>@if ( substr($f->keterangan, 60))
                                                                <h5>...</h5>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-primary"
                                                                    data-toggle="modal"
                                                                    data-target="#ExampleModal{{ $f->id }}">
                                                                    Tampilkan ...
                                                                </button>
                                                                @else
                                                                {{ $f->keterangan }}
                                                                @endif</td>
                                                            <td><a class="btne" href={{ url('madit', $f->id) }}><i
                                                                        class="fa-solid fa-pen-to-square"></i></a> |</a>
                                                                <a class="btne" href={{ 'haps/' . $f['id'] }}><i
                                                                        class="fa-solid fa-trash-can"></i></a></td>
                                                        </tr>
                                                        @endforeach
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="pagination1">
                                        {{ $jadwal->links() }}
                                    </div>
                                    {{-- js --}}
                                    @include('templet.js')
                                    @include('sweetalert::alert')
</body>

</html>

<!-- Modal -->
@foreach ($jadwal as $f)

<div class="modal fade" id="ExampleModal{{ $f->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    {{ $f->hari }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    {{ $f->keterangan }}
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach