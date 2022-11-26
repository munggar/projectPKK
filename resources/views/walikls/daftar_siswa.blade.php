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


                        {{-- tabel --}}
                        <div class="main-panel">
                            <div class="content-wrapper">
                                <div class="row ">
                                    <div class="col-12 grid-margin">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Data Murid</h4>
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
                                                            <td><a class="btne" href={{ url('dit', $item->id) }}><i
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
                                            @include('templet.js')
</body>

</html>
