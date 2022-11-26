
<!DOCTYPE html>
<html>
<head>
<title>Tambah Matapel Adaptif</title>

        <!-- Change your font in here -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">

        <!-- add icon link -->
        <link rel="stylesheet" type="text/css" href="../css/style-daftar.css">

</head>
<script src="https://kit.fontawesome.com/d4b981459a.js" crossorigin="anonymous"></script>

<body>
    <form action="/simpanadaptif" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
  <div class="form-signin">
    <div class="title">
      <span class="main-title text-uppercase text-center">Tambah Data</span>
      <p class="subtitle text-center">
        <span class="by">Mata Pelajaran</span> Adaptif
      </p>
    </div>

    <div class="form-group">
        <input type="file" class="form-control" id="gambar"
            placeholder="Masukan Judul Kompetensi" name="gambar" required>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Masukan Judul Mapel"
            name="judul" required>
    </div>
    <div class="form-group">
        <input type="text" class="form-control"
            placeholder="Masukan Keterangan pada Kompetensi" name="keterangan" required>
      </div>
    <div class="form-group text-center">
        <button type="submit">Simpan Mapel</button><br>
        <br><a href="/adaptif" class="signup">Kembali</a>
    </div>
  </div>

</body>
</html>