
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
    <form action="/simpankas" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
  <div class="form-signin">
    <div class="title">
      <span class="main-title text-uppercase text-center">Tambah Data</span>
      <p class="subtitle text-center">
        <span class="by">Uang Kas</span> Siswa
      </p>
    </div>

    <div class="form-group">
        <select name="siswa_id" id="siswa_id" class="form-control">
            <option disabled value>Pilih Nama Siswa</option>
            @foreach ($nama as $item)
                <option value="{{ $item->id }}">{{ $item->nama }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <input type="text" class="form-control" id="harga"
            placeholder="Masukan Jumlah Pembayaran" name="harga" required>
    </div>
    <div class="form-group">
        <input type="text" autocomplete="off" class="form-control"
            placeholder="Masukan Keterangan pada Pembayaran" name="keterangan" required>
      </div>
    <div class="form-group text-center">
        <button type="submit" class="btn btn-outline-info">Simpan Kas</button><br>
        <br><a href="/kas" class="btn btn-outline-info">Kembali</a>
    </div>
  </div>
  @include('sweetalert::alert')
</body>
</html>
