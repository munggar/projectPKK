<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Guru</title>
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
            <form action="{{ url('upguru', $guru->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="foto" for="file">
                        <input class="input" type="file" id="file" name="foto" onchange="loadFile(event)">
                        <img class="image" src="{{ asset('Guru/'.$guru->foto) }}" height="100" width="100" id="output"
                            alt="">
                        <div class="middle">
                            <div class="kata">
                                <i class="fa-solid fa-image"></i> <br> Ganti Foto
                            </div>
                        </div>
                    </label>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="email" name="jud" value="{{ $guru['jud'] }}" required
                        placeholder="masukan guru">
                </div>
                <div class="form-group">
                    <input type="text" name="keterangan" value="{{ $guru['ket'] }}" required class="form-control" id="email"
                        placeholder="masukan keterangan">
                </div>
                <button type="submit" id="button" class="btn btn-primary deep-purple btn-block ">Submit</button>
                <br>
                <a href="/galkas">Kembali</a>
            </form>
        </div>
    </div>
    @include('adm.js')
</body>

</html>
