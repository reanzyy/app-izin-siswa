
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Laporan</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Dispensasi</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Mulai Jam Ke</th>
                <th>Kembali Jam Ke</th>
                <th>Keperluan</th>
                <th>Plat</th>
                <th>Guru Piket</th>
                <th>Tanggal</th>
            </tr>
            @foreach($lap as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->dispensasi->nama_siswa }}</td>
                <td>{{ $item->dispensasi->kelas->nama_kelas }}</td>
                <td>{{ $item->dispensasi->jurusan->nama_jurusan }}</td>
                <td>{{ $item->dispensasi->jammulai->jam }}</td>
                <td>{{ $item->dispensasi->jamkembali->jam }}</td>
                <td>{{ $item->dispensasi->keperluan }}</td>
                <td>{{ $item->dispensasi->plat_no }}</td>
                <td>{{ $item->guru->nama_guru }}</td>
                <td>{{ $item->created_at }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>