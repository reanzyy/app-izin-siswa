<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl leading-tight">
            {{ __('Dispensasi') }}
        </h2>
    </x-slot>

    <div class="shadow overflow-hidden sm-rounded-md mt-5 mx-4">
        <div class="px-4 py-5 bg-white sm:p-6 ">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Mulai jam ke</th>
                        <th>Kembali jam ke</th>
                        <th>Plat no</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dispensasi as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_siswa }}</td>
                            <td>{{ $item->kelas->nama_kelas }}</td>
                            <td>{{ $item->jammulai->jam }}</td>
                            <td>{{ $item->jamkembali->jam }}</td>
                            <td>{{ $item->plat_no }}</td>
                            <td><span class="badge text-bg-warning">{{ $item->status }}</span></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
