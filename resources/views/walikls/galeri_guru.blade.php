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
                                                <h4 class="card-title">Galeri Kelas</h4>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tr align="center">
                                                            <th style="width: 50px">NO</th>
                                                            <th>Foto</th>
                                                            <th>Nama Guru</th>
                                                            <th>Mengajar Pelajaran</th>
                                                            <th>AKSI</th>
                                                        </tr>
                                                        @foreach ($guru as $f)
                                                        <tr align="center">
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>
                                                                <img class="img fuild"
                                                                    src="{{ asset ('Guru/' . $f->foto) }}"
                                                                    width="80px" height="80px" alt="not found"
                                                                    srcset="">
                                                            </td>
                                                            <td>{{ $f->jud }}</td>
                                                            <td>{{ $f->ket }}</td>
                                                            <td><a class="btne" href={{ url('editguru', $f->id) }}><i
                                                                        class="fa-solid fa-pen-to-square"></i></a> | <a
                                                                    class="btne" href={{ url('pus', $f->id) }}><i
                                                                        class="fa-solid fa-trash-can"></i></a></td>
                                                        </tr>
                                                        @endforeach
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="pagination">
                                                {{ $guru->links() }}
                                            </div>
                                            {{-- js --}}
                                            @include('templet.js')

                                            @include('sweetalert::alert')

</body>

</html>
