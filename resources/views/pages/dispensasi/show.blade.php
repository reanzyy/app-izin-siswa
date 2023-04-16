<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl leading-tight">
            {{ __('Dispensasi') }} &raquo; Detail
        </h2>
    </x-slot>

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
                        <th>Status</th>
                        <th>
                            <span
                                class="badge {{ $dispensasi->status == '1' ? 'text-bg-warning' : 'text-bg-success' }}">{{ $dispensasi->status == '1' ? 'Belum diproses' : 'Sudah diproses' }}
                            </span>
                        </th>
                    </tr>
                    <tr>
                        <th>Aksi</th>
                        <th>
                            <button class="btn btn-warning btn-sm rounded-full">
                                <i class="fa fa-print mr-1"></i>Cetak
                            </button>
                        </th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</x-app-layout>
