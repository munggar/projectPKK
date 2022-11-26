<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="daftar.css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/ktpang.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>TAMBAH DATA</title>
</head>

<body>
    <div class="bod">
        <h1 align="center"><strong><em>HALAMAN MENAMBAHKAN FOTO PADA GALERI SEKOLAH</em></strong></h1>
        <div class="col d-flex justify-content-center">
            <div class="card" style="width: 1000px;">
                <img class="card-img-top" src="templet/assets/gass.jpg" alt="Card image cap" height="300px">
                <div class="card-body">
                    <form action="{{ route('simpangal') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="foto" class="col-sm-2 col-form-label"><b>Foto</b></label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="foto"
                                    placeholder="Masukan Judul Kompetensi" name="foto" required><br>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jud" class="col-sm-2 col-form-label"><b>Judul</b></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"
                                    placeholder="Masukan Judul Untuk Foto Galeri Sekolah" name="jud" required><br>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ket" class="col-sm-2 col-form-label"><b>Keterangan</b></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"
                                    placeholder="Masukan Keterangan pada Foto Galeri Sekolah" name="ket"
                                    required><br>
                            </div>
                        </div>
                        <div class="col-sm-10" style="position: relative;left: 870px;top: 4px;">
                            <button type="submit" class="btn btn-primary">Daftarkan</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </form>
    <div class="form-group row">
        <br>
        <div class="container">
            <a href="{{ route('gale') }}"><button type="button" class="btn btn-primary"
                    style="position:absolute; left: 780px; top: 564;">Kembali</button></a>
        </div>
</body>

</html>
