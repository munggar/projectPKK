<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GALERI SEKOLAH</title>
    <link rel="shortcut icon" href="../img/ktpang.png" type="image/x-icon">
    @include('adm.head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/solid.min.css"
        integrity="sha512-qzgHTQ60z8RJitD5a28/c47in6WlHGuyRvMusdnuWWBB6fZ0DWG/KyfchGSBlLVeqAz+1LzNq+gGZkCSHnSd3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<style>
    /* Center the loader */
    #loader {
        position: absolute;
        left: 50%;
        top: 50%;
        z-index: 1;
        width: 120px;
        height: 120px;
        margin: -76px 0 0 -76px;
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #3498db;
        -webkit-animation: spin 2s linear infinite;
        animation: spin 2s linear infinite;
    }

    @-webkit-keyframes spin {
        0% {
            -webkit-transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    /* Add animation to "page content" */
    .animate-bottom {
        position: relative;
        -webkit-animation-name: animatebottom;
        -webkit-animation-duration: 1s;
        animation-name: animatebottom;
        animation-duration: 1s
    }

    @-webkit-keyframes animatebottom {
        from {
            bottom: -100px;
            opacity: 0
        }

        to {
            bottom: 0px;
            opacity: 1
        }
    }

    @keyframes animatebottom {
        from {
            bottom: -100px;
            opacity: 0
        }

        to {
            bottom: 0;
            opacity: 1
        }
    }

    #myDiv {
        display: none;
        text-align: center;
    }
</style>

<body onload="myFunction()" style="margin:0;">
    <div id="loader"></div>

    <div style="display:none;" id="myDiv" class="animate-bottom">
        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                    </div>
                    <div class="sidebar-brand-text">SMKN 1 KATAPANG</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item ">
                    <a class="nav-link" href="/admin">
                        <i class="fa-solid fa-house-chimney"></i>
                        <span><b>Dashboard</b></span></a>
                </li>
                <hr class="sidebar-divider d-none d-md-block">
                <li class="nav-item ">
                    <a class="nav-link" href="/kontak">
                        <i class="fa-solid fa-phone"></i>
                        <span><b>Kontak</b></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/pengguna">
                        <i class="fa-solid fa-users"></i>
                        <span><b>Pengguna Akun</b></span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/kompetensi">
                        <i class="fa-solid fa-book-atlas"></i>
                        <span><b>Kompetensi</b></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/gale">
                        <i class="fa-solid fa-image"></i>
                        <span><b>Galeri</b></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/ber">
                        <i class="fa-solid fa-image"></i>
                        <span><b>Aktivitas Siswa</b></span></a>
                </li>
                <!-- Divider -->
            </ul>

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <li>
                                <div class="dropdown">
                                    <button class="btn btn-outline-light dropdown" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <a class="nav-link" href="#" id="userDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span
                                                class="mr-2 d-none d-lg-inline text-gray-600 small"><b>{{ Auth::user()->name }}</b></span><br>
                                            <span
                                                class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->email }}</span>
                                        </a>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('editah', Auth::User()->id) }}">Edit
                                            Profil</a></li>
                                        <li><a class="dropdown-item" href="{{ route('register') }}">Registrasi</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="{{ url('logout') }}">Logout</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>

                    </nav>
                    <!-- Button trigger modal -->
                    <button type="button" style="position:relative;top: 474px;left: 221px;" class="btn btn-primary"
                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Import Data
                    </button>
                    <a href="{{ route('adminexport') }}" style="position:relative; top: 474px;left: 232px;"
                        class="btn btn-primary">Export Data</a>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="{{ route('adminimport') }}" method="POST"
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
                    <a href="{{ route('buat') }}" style="position:relative; top: 474px;left: 242px;"
                        class="btn btn-primary">Tambahkan Data</a>
                    <table class="tbl table-bordered border-primary" border="5px" cellpadding="5px">
                        <tr align="center">
                            <th>NO</th>
                            <th>Foto</th>
                            <th>Nama Foto</th>
                            <th>Keterangan</th>
                            <th style="width: 100px">AKSI</th>
                        </tr>
                        @foreach ($gal as $f)
                            <tr align="center">
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    @if (!preg_match('/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i', $f->foto))
                                        <img class="img fuild" src="{{ asset('img/' . $f->foto) }}" width="80px"
                                            height="80px" alt="not found" srcset="">
                                    @else
                                        <img class="img fuild" src="{{ $f->foto }}" width="80px"
                                            height="80px" alt="not found" srcset="">
                                    @endif
                                </td>
                                <td>{{ $f->jud }}</td>
                                <td>{{ $f->ket }}</td>
                                <td><a class="btne" href={{ url('edd', $f->id) }}><i
                                            class="fa-solid fa-pen-to-square"></i></a> | <a class="btne"
                                        href={{ url('pus', $f->id) }}><i class="fa-solid fa-trash-can"></i></a></td>
                            </tr>
                        @endforeach
                </div>
            </div>
        </div>

    </div>
    <div class="pagination1">
        {{ $gal->links() }}
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
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
    @include('sweetalert::alert')
</body>

</html>
