<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Siswa</title>
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
@include('adm.css')

<body id="body">

    <div id="login-card" class="card">
        <div class="card-body">
            <h2 class="text-center">Login form</h2>
            <br>
            <form action="{{ url('upsiswa', $gal->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="foto" for="file">
                        <input class="input" type="file" id="file" name="foto" onchange="loadFile(event)">
                        <img style="height:135px; width:220px; left:-42px" class="image" src="{{ asset('Galfot/'.$gal->foto) }}"
                            id="output" alt="">
                        <div class="middle">
                            <div class="kata">
                                <i class="fa-solid fa-image"></i> <br> Ganti Foto
                            </div>
                        </div>
                    </label>
                </div>
                <div class="form-group">
                    <select name="siswa_id" id="siswa_id" class="form-select" style="position: relative; left: 88px;">
                        <option disabled value required>Pilih Nama Siswa</option>
                        @foreach ($nama as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" name="ket" value="{{ $gal['ket'] }}" required class="form-control" id="email"
                        placeholder="masukan keterangan">
                </div>
                <button type="submit" id="button" class="btn btn-primary deep-purple btn-block ">Submit</button>
                <br>
                <a href="/galkas">Kembali</a>
            </form>
        </div>
        <div>
        </div>
    </div>
</body>
@include('adm.js')

</html>
