<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Edit Peminjaman Buku</title>
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
            <h2 class="text-center">Login form</h2>
            <br>
            <form action="/update_buku/{{ $pin->id }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group"  style="margin-left: 5pc">
                    <input type="hidden" class="form-control" id="id" name="id" value="{{ $pin['id'] }}" required>
                    <select name="siswa_id" id="siswa_id" class="form-select">
                        <option disabled value>Pilih Nama Siswa</option>
                        @foreach ($siswa as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
                    <div class="form-group">
                        <input type="text" placeholder="Nama" name="nmbuku" class="form-control"
                            value="{{ $pin['nmbuku'] }}">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Nama" name="keterangan" class="form-control"
                            value="{{ $pin['keterangan'] }}">
                    </div>
                    <button type="submit" id="button" class="btn btn-primary deep-purple btn-block ">Update</button>
                    <br>
                    <a href="/pinjam">Kembali</a>
            </form>
        </div>
        <div>
