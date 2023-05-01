<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ url('frontend/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<style>
    * {
        color: black;
    }
</style>

<body class="bg-gradient bg-primary">

    <div class="container p-5">
        <div class="d-flex align-items-center justify-content-center">
            <div class="card" style="width: 35rem;">
                <h5 class="card-header">
                    Formulir izin
                </h5>
                <div class="card-body">
                    <form action="{{ route('dispensasi.store') }}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap Siswa</label>
                            <input type="text" name="nama_siswa" class="form-control" id="nama">
                            @error('nama_siswa')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label class="form-label">Kelas</label>
                            <select name="id_kelas" id="id_kelas" class="form-select">
                                @foreach ($kelas as $kelasitem)
                                    <option value="{{ $kelasitem->id }}">
                                        {{ $kelasitem->nama_kelas }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Kelas</label>
                            <select name="id_jurusan" id="id_jurusan" class="form-select">
                                @foreach ($jurusan as $jurusanitem)
                                    <option value="{{ $jurusanitem->id }}">
                                        {{ $jurusanitem->nama_jurusan }}
                                    </option>
                                @endforeach
                            </select>
                        </div>


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


                        <div class="mb-3">
                            <label class="form-label">Keperluan</label>
                            <textarea name="keperluan" class="form-control" rows="3"></textarea>
                            @error('keperluan')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-4 d-flex flex-column">
                            <label class="form-label">Plat no</label>
                            <sup class="mb-2">Kosongkan bila perlu <i class="fa fa-info-circle"></i></sup>
                            <input type="text" name="plat_no" class="form-control">
                            @error('plat_no')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Buat Surat
                        </button>

                        <div class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah data yang kamu isi sudah benar?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Ya, Data sudah benar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                    </form>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="{{ url('adminlte/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
        <script src="{{ url('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ url('frontend/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- Select 2 -->
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <script>
            $(document).ready(function() {
                $("#id_kelas").select2({
                    theme: 'bootstrap4',
                    placeholder: "Please Select"
                });
            });

            $(document).ready(function() {
                $("#id_jurusan").select2({
                    theme: 'bootstrap4',
                    placeholder: "Please Select"
                });
            });
        </script>

</body>

</html>
