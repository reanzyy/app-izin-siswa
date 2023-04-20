<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak</title>
</head>

<style>
    * {
        font-family: monospace;
        margin: 0;
        padding: 0;
    }

    .wrapper {
        width: 250px;
        margin: 15px
    }

    .logo {
        display: block;
        margin-right: auto;
        margin-left: auto;
        filter: grayscale(1)
    }

    h3 {
        text-align: center;
    }

    th {
        text-align: left;
        font-weight: 700;
    }

    .header {
        text-align: center;
    }
</style>

<body>
    <div class="wrapper">
        <div class="header">
            <img src="/adminlte/img/neper.png" style="margin-bottom: 10px" class="logo" width="100" alt="">
            @foreach ($sekolah as $item)
                <h3 style="margin-bottom: 5px">{{ $item->nama_sekolah }}</h3>
                <p style="margin-bottom: 10px" class="alamat">{{ $item->alamat_sekolah }} No: Telp
                    {{ $item->telepon_sekolah }}
                </p>
            @endforeach
        </div>
        <hr style="margin-bottom: 10px">
        <table>
            <tr>
                <th>Nama</th>
                <td> = {{ $dispensasi->nama_siswa }}</td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td> = {{ $dispensasi->kelas->nama_kelas }}</td>
            </tr>
            <tr>
                <th>Jam Mulai</th>
                <td> = {{ $dispensasi->jammulai->jam }}</td>
            </tr>
            <tr>
                <th>Jam Kembali</th>
                <td> = {{ $dispensasi->jamkembali->jam }}</td>
            </tr>
            <tr>
                <th>Keperluan</th>
                <td> = {{ $dispensasi->keperluan }}</td>
            </tr>
            <tr>
                <th>Plat No. kendaraan</th>
                <td> = {{ $dispensasi->plat_no }}</td>
            </tr>
        </table>
        <hr style="margin-block: 10px">
        <div style="text-align: right;">
            <p>Cirebon, {{ $dispensasi->created_at->format('d M Y') }}</p>
            <p>Guru piket,</p>
            {{-- {{ $cetak->id_guru }} --}}
        </div>
    </div>
</body>

</html>
