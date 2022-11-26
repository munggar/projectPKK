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
                                                <h4 class="card-title">Data Akun Admin</h4>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tr align="center">
                                                            <th>No</th>
                                                            <th>Nama</th>
                                                            <th>Username Hulu</th>
                                                            <th>Foto</th>
                                                            <th>Akses</th>
                                                        </tr>
                                                        @foreach ($data as $f)
                                                        <tr align="center">
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $f->name }}</td>
                                                            <td>{{ $f->username }}</td>
                                                            <td><img width="80" height="80"
                                                                    src="{{asset('User/' . $f->foto)}}"></td>
                                                            <td>{{ $f->level }}</td>
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
