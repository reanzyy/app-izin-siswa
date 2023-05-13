<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl leading-tight">
            {{ __('Dispensasi') }} &raquo; Detail
        </h2>
    </x-slot>

    @if ($message = Session::get('terima'))
        <div class="alert alert-success fade show mt-4 -mb-5 mx-4" role="alert">
            <strong>{{ $message }}</strong>
        </div>
    @elseif ($message = Session::get('tolak'))
        <div class="alert alert-danger fade show mt-4 -mb-5 mx-4" role="alert">
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="shadow overflow-hidden sm-rounded-md my-5 mx-4">
        <div class="px-4 py-5 bg-white sm:p-6 ">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>{{ $dispensasi->nama_siswa }}</th>
                    </tr>
                    <tr>
                        <th>Kelas</th>
                        <th>{{ $dispensasi->kelas->nama_kelas }}</th>
                    </tr>
                    <tr>
                        <th>Mulai jam ke</th>
                        <th>{{ $dispensasi->jammulai->jam }}</th>
                    </tr>
                    <tr>
                        <th>Kembali jam ke</th>
                        <th>{{ $dispensasi->jamkembali->jam }}</th>
                    </tr>
                    <tr>
                        <th>Keperluan</th>
                        <th>{{ $dispensasi->keperluan }}</th>
                    </tr>
                    <tr>
                        <th>Plat no</th>
                        <th>{{ $dispensasi->plat_no }}</th>
                    </tr>
                    <tr>
                        <th>Tanggal</th>
                        <th>{{ $dispensasi->created_at->format('d/m/Y') }}</th>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <th>
                            <span
                                class="badge @if ($dispensasi->status == '2') text-bg-warning @else @if ($dispensasi->status == '1') text-bg-success @else @if ($dispensasi->status == '0') text-bg-danger @endif @endif @endif">
                                @if ($dispensasi->status == '2')
                                    Belum diproses
                                @else
                                    @if ($dispensasi->status == '1')
                                        Diterima
                                    @else
                                        @if ($dispensasi->status == '0')
                                            Ditolak
                                        @endif
                                    @endif
                                @endif
                            </span>
                        </th>
                    </tr>
                    <tr>
                        <th>Aksi</th>
                        <th>
                            @if ($dispensasi->status == 2)
                                <a href="{{ route('statusDiterima', $dispensasi->id) }}"
                                    class="btn btn-sm btn-success">Terima</a>
                                <a href="{{ route('statusDitolak', $dispensasi->id) }}"
                                    class="btn btn-sm btn-danger">Tolak</a>
                            @else
                                @if ($dispensasi->status == 1)
                                    <a href="{{ route('formPilihguru', $dispensasi->id) }}"
                                        class="btn btn-sm btn-warning">
                                        <i class="fa fa-print mr-1"></i>Cetak
                                    </a>
                                @else
                                    <button disabled class="btn btn-sm btn-warning">
                                        <i class="fa fa-print mr-1"></i>Cetak
                                    </button>
                                @endif
                            @endif

                        </th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</x-app-layout>
