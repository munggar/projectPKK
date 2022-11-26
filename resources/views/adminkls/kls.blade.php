<!DOCTYPE html>
<html lang="en">
@include('include.head')


@include('include.loader')

<body onload="myFunction()" style="margin:0;">
    <div id="loader"></div>

    <div style="display:none;" id="myDiv" class="animate-bottom">

        <div class="container-scroller">
            <div class="row p-0 m-0 proBanner" id="proBanner">
                <div class="col-md-12 p-0 m-0">
                </div>
            </div>
            <!-- partial:partials/_sidebar.html -->

            @include('include.sidebar')
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_navbar.html -->
                @include('include.nav')

                <div class="main-panel">
                    <div class="content-wrapper">

                        <!-- partial -->
                        <div class="main-panel">
                            <div class="content-wrapper">
                                <div class="row ">
                                    <div class="col-12 grid-margin">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Preview Data Murid</h4>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tr align="center">
                                                            <th>NO</th>
                                                            <th>NIS</th>
                                                            <th>NAMA</th>
                                                            <th>JENIS KELAMIN</th>
                                                            <th>TANGGAL LAHIR</th>
                                                        </tr>
                                                        @foreach ($data as $item)
                                                        <tr align="center">
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $item->nis }}</td>
                                                            <td>{{ $item->nama }}</td>
                                                            <td>{{ $item->jkel }}</td>
                                                            <td>{{ $item->ttg }} {{ $item->bulan }} {{ $item->tahun }}</td>
                                                        </tr>
                                                        @endforeach
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- content-wrapper ends -->
                            <!-- partial:partials/_footer.html -->
                            <footer class="footer">
                                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                                    <span
                                        class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright
                                        © SMKN 1 KATAPANG - RPL 2</span>
                                </div>
                            </footer>
                            <!-- partial -->
                        </div>
                        <!-- main-panel ends -->
                    </div>
                    <!-- page-body-wrapper ends -->
                </div>
                <!-- container-scroller -->
            </div>
        </div>
    </div>
    {{-- js --}}
    @include('include.js')

    @include('sweetalert::alert')
</body>

</html>