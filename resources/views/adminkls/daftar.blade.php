<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data Siswa</title>

    <!-- Change your font in here -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">

    <!-- add icon link -->
    <link rel="stylesheet" type="text/css" href="../css/style-daftar.css">

</head>
<script src="https://kit.fontawesome.com/d4b981459a.js" crossorigin="anonymous"></script>

<body>
    <form action="/simpandaftar" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-signin">
            <div class="title">
                <span class="main-title text-uppercase text-center">Tambah Data</span>
                <p class="subtitle text-center">
                    <span class="by">Siswa </span> XII - Rpl 2
                </p>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="gambar" placeholder="Masukan NIS" name="nis" required
                    maxlength="10">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="gambar" placeholder="Masukan Nama Siswa" name="nama"
                    required>
            </div>

            <div class="form-group">
                <label for="">Pilih Jenis Kelamin</label> <br>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jkel" id="Laki-Laki " value="Laki-Laki" checked>
                    <label class="form-check-label" for="gridRadios1">
                        Laki-Laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jkel" id="Perempuan" value="Perempuan">
                    <label class="form-check-label" for="gridRadios2">
                        Perempuan
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="ttg" class="form-label">Tanggal Lahir</label>
                <div class="col-sm-10"> <br>
                    <select name="ttg" required>
                        <option value="">Tanggal</option>
                        <?php for( $i = 1; $i <= 31; $i++ ) : ?>
                        <option><?= $i ?></option>
                        <?php endfor; ?>
                    </select>
                    <select name="bulan" required>
                        <option value="">Bulan</option>
                        <option value="Januari">01</option>
                        <option value="Februari">02</option>
                        <option value="Maret">03</option>
                        <option value="April">04</option>
                        <option value="Mei">05</option>
                        <option value="Juni">06</option>
                        <option value="Juli">07</option>
                        <option value="Agustus">08</option>
                        <option value="September">09</option>
                        <option value="Oktober">10</option>
                        <option value="November">11</option>
                        <option value="Desember">12</option>

                    </select>
                    <select name="tahun" required>
                        <option value="">Tahun</option>
                        <?php for( $i = 2000; $i <= 2022; $i++ ) : ?>
                        <option><?= $i ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
            </div>
            <div class="form-group text-center"> <br>
                <button type="submit" class="btn btn-outline-info">Simpan Data Siswa</button><br>
                <br><a href="/muklas" class="signup">Kembali</a>
            </div>
        </div>

</body>

</html>
