<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Kas</title>
</head>

<body>
    <h2 style="text-align: center">Tabel Keuangan Kas</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr align="center">
                <th scope="col">No.</th>
                <th scope="col">NIS</th>
                <th scope="col">Nama</th>
                <th scope="col">Pembayaran</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Tanggal Pembayaran</th>
            </tr>
        </thead>
        @php
        $total = 0;
        $keluar;
        @endphp
        @foreach ($uang as $item)
        @php
        $total = $total + $item->harga;
        @endphp
        <tbody>
            <tr align="center">
                <td scope="row">{{ $loop->iteration }}</td>
                @if (empty($item->siswa->nis) || empty($item->siswa->nama))
                <br>
                @else
                <td>0{{ $item->siswa->nis }}</td>
                <td>{{ $item->siswa->nama }}</td>
                @endif
                <td>Rp.{{ number_format($item->harga), 2}}</td>
                <td>{{ $item->keterangan }}</td>
                <td>{{ showDateTime($item->created_at, 'l,d F Y')}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <h2 style="text-align: center">Tabel Penghitungan Keuangan Kas</h2>
    <table border="1" cellpadding="20" cellspacing="0">
        <thead>
            <tr>
                <th>
                    Pemasukan Per minggu
                </th>
                <th>
                    Pengeluaran
                </th>
                <th>
                    Keterangan Pengeluaran
                </th>
                <th>
                    Jumlah
                </th>
            </tr>
        </thead>
        @php
        $pengeluaran = 0;
        @endphp
        @foreach ($keluar as $item)
        @php
        $pengeluaran = $total - $item->pengeluaran;
        @endphp
        <tbody>
            <tr align="center">
                <td>Rp. {{ number_format($total) }}</td>
                <td>Rp. {{ number_format($item->pengeluaran) }}</td>
                <td>{{ $item->keterangan }}</td>
                <td>Rp. {{ number_format($pengeluaran) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
