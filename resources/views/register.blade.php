<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register Admin</title>
    <link rel="shortcut icon" href="../img/ktpang.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0 enters" >
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block">
                        <img src="../img/ktpang.png" alt="" style="margin: 100px">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Membuat Akun Baru</h1>
                            </div>
                            <form class="user" action="{{ route('registrasi') }}" method="post"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="form-control form-control-user custom-file-input"
                                            id="foto" name="foto" required>
                                        <label class="custom-file-label" for="foto">Pilih Foto</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                        name="name" placeholder="Masukkan Nama" required>
                                </div>
                                <div class="form-group">
                                    <input type="username" class="form-control form-control-user"
                                        id="exampleInputUsername" name="username" placeholder="Masukkan Username"
                                        required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        name="email" placeholder="Masukkan Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" name="password"
                                        id="exampleInputPassword" placeholder="Password" required>
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-outline-success">Register!</button>
                                <a href="/login" class="btn btn-outline-warning">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('adm.js')
    @include('sweetalert::alert')
</body>

</html>
