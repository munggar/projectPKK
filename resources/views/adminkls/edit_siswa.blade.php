<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
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

<body id="body">
    <div id="login-card" class="card">
        <div class="card-body">
            <h2 class="text-center">Login form</h2>
            <br>
            <form action="{{ url('update_siswa', $data->id) }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="hidden" class="form-control" id="id" name="id" value="{{ $data['id'] }}" required>
                    <input type="number" placeholder="NIS" name="nis" pattern="1234567890" class="form-control"
                        onKeyPress="if(this.value.length==10) return false;" value="0{{ $data['nis'] }}">
                </div>
                    <div class="form-group">
                        <input type="text" placeholder="Nama" name="nama" class="form-control"
                            value="{{ $data['nama'] }}">
                    </div>
                    <div class="form-group">
                        <select name="jkel" id="jkel" class="form-control">
                            <option value="{{ $data['jkel'] }}">{{ $data['jkel'] }}</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="ttg" required>
                            <option value="{{ $data['ttg'] }}">{{ $data['ttg'] }}</option>
                            <?php for( $i = 1; $i <= 31; $i++ ) : ?>
                            <option><?= $i ?></option>
                            <?php endfor; ?>
                        </select>
                        <select name="bulan" required>
                            <option value="{{ $data['bulan'] }}">{{ $data['bulan'] }}</option>
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
                            <option value="{{ $data['tahun'] }}">{{ $data['tahun'] }}</option>
                            <?php for( $i = 1980; $i <= 2022; $i++ ) : ?>
                            <option><?= $i ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <button type="submit" id="button" class="btn btn-primary deep-purple btn-block ">Update</button>
                    <br>
                    <a href="/muklas">Kembali</a>
            </form>
        </div>
        <div>
