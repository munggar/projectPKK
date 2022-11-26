<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/ktpang.png" type="image/x-icon">
    <link href="daftar.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Peminjaman Buku</title>
</head>

<body>
    <div class="bod">
        <h1 align="center"><strong><em>HALAMAN PEMBAYARAN</em></strong></h1>
        <form action="{{route ('simpanbuku')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col d-flex justify-content-center">
                <div class="card" style="width: 1000px">
                    <img class="card-img-top" src="templet/assets/gas.jpg" alt="Card image cap" height="300px">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="siswa_id" class="col-sm-2 col-form-label">Nama Siswa</label>
                            <div class="col-sm-10">
                                <select name="siswa_id" id="siswa_id" class="form-control">
                                    <option disabled value>Pilih Nama Siswa</option>
                                    @foreach ($nama as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div><br>
                        <div class="form-group row">
                            <label for="nmbuku" class="col-sm-2 col-form-label">Nama Buku</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="Masukkan Nama Buku..." class="form-control"
                                    name="nmbuku" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="Masukkan Keterangan..." class="form-control"
                                    name="keterangan" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <br>
                            <div class="col-sm-10">
                                <button type="submit" class="btn daftar btn-primary"
                                    style="position:absolute; left: 890px; top: 479px;">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </form>
    <div class="container">
        <a href="{{ route('pinjam') }}"><button type="button" class="btn btn-primary"
                style="position:absolute; left: 790px; top: 536px;">Kembali</button></a>
        @include('sweetalert::alert')
    </div>
</body>

</html>
