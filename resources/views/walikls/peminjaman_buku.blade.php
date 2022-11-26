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
                                                <h4 class="card-title">Data Peminjaman Buku</h4>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tr align="center">
                                                            <th>NO</th>
                                                            <th>NIS</th>
                                                            <th>NAMA SISWA</th>
                                                            <th>NAMA BUKU</th>
                                                            <th>TANGGAL PEMINJAMAN</th>
                                                            <th>AKSI</th>
                                                        </tr>
                                                        @foreach ($pin as $item)
                                                        <tr align="center">
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{$item->siswa->nis}}</td>
                                                            <td>{{$item->siswa->nama}}</td>
                                                            <td>{{$item->nmbuku}}</td>
                                                            <td>{{ showDateTime($item->created_at, 'l,d F Y')}}</td>
                                                            <td>
                                                                <a class="btne" href={{ url('editbuku', $item->id) }}><i
                                                                        class="fa-solid fa-pen-to-square"></i></a> | <a
                                                                    class="btne" href='/hapusbuku/{{ $item->id }}'><i
                                                                        class="fa-solid fa-trash-can"></i></a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </table>
                                                </div>
                                            </div>
                                            @include('sweetalert::alert')
                                            <!-- JavaScript Bundle with Popper -->
                                            <script
                                                src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
                                                integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
                                                crossorigin="anonymous">
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
</body>

</html>