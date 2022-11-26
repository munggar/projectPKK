<!DOCTYPE html>
<html lang="en">
<head>
  <title>Foto Galeri Siswa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <link href="https://fonts.googleapis.com/css?family=Nunito:600,700,900" rel="stylesheet">
 <link rel="stylesheet" href="../css/siswa.css">

</head>
<body id="body">

<div id="login-card" class="card">
<div class="card-body">
  <h2 class="text-center">Masukkan Foto di galeri siswa</h2>
  <br>
  <form action="/simpansiswa" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
      <input type="file" class="form-control" id="email" placeholder="Enter email" name="foto">
    </div>
    <div class="form-group">
        <select name="siswa_id" id="siswa_id" class="form-control" placeholder="masukkan nama siswa">
            <option disabled value>Pilih Nama Siswa</option>
            @foreach ($nama as $item)
                <option value="{{ $item->id }}">{{ $item->nama }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="email" placeholder="Masukkan Keterangan" name="ket">
    </div>
    <button type="submit" id="button" class="btn btn-primary deep-purple btn-block ">Submit</button>
    <br>
    <a href="/galkas" style="margin-left: 8pc;">Kembali</a>

  </form>
</div>
<div>