<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir</title>
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ url('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('adminlte/css/adminlte.min.css') }}">
</head>

<body class="bg-primary">
    <div class="shadow overflow-hidden sm-rounded-md mt-5 mx-4">
        <div class="px-4 py-5 bg-white sm:p-6 ">
            <div class="container-fluid">
                <form action="/dispensasi/formulir/create">
                    @csrf
                    <div class="row">

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap Siswa</label>
                                <input type="text" name="nama_siswa" class="form-control" id="nama">
                            </div>
                        </div>

                        <div class="col-6"></div>

                        <div class="col-4">
                            <div class="mb-3">
                                <label class="form-label">Kelas</label>
                                <select name="kelas" class="form-select">
                                    @foreach ($kelas as $kelasitem)
                                        <option value="{{ $kelasitem->nama_kelas }}">{{ $kelasitem->nama_kelas }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-8"></div>

                        <div class="col-4">
                            <div class="mb-3">
                                <label class="form-label">Jam mulai</label>
                                <select name="jam_mulai" class="form-select">
                                    @foreach ($jam as $jamitem)
                                        <option value="{{ $jamitem->id }}">
                                            {{ $jamitem->jam }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="mb-3">
                                <label class="form-label">Jam kembali</label>
                                <select name="jam_kembali" class="form-select">
                                    @foreach ($jam as $jamitem)
                                        <option value="{{ $jamitem->id }}">
                                            {{ $jamitem->jam }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-4"></div>

                        <div class="col-3">
                            <div class="mb-3">
                                <label class="form-label">Keperluan</label>
                                <textarea name="keperluan" class="form-control" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="col-6"></div>

                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                        </div>

                        <div class="col-6"></div>

                        <div class="col-6">
                            <div class="mb-4">
                                <label class="form-label">Plat no</label>
                                <input type="text" name="plat_no" class="form-control">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Buat Surat</button>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ url('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ url('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('adminlte/js/adminlte.min.js') }}"></script>
</body>

</html>
