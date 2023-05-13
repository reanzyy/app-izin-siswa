<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl leading-tight">
            {{ __('Dispensasi') }}
        </h2>
    </x-slot>

    <div class="shadow overflow-hidden sm-rounded-md my-5 mx-4">
        <div class="px-4 py-4 bg-white sm:p-6 ">
            <table id="tabel-data" class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Mulai jam</th>
                        <th>Kembali jam</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Aksi</th>
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
                            <td>{{ $item->created_at->format('d/m/Y') }}</td>
                            <td>
                                <span
                                    class="badge @if ($item->status == '2') text-bg-warning @else @if ($item->status == '1') text-bg-success @else @if ($item->status == '0') text-bg-danger @endif @endif @endif">
                                    @if ($item->status == '2')
                                        Belum diproses
                                    @else
                                        @if ($item->status == '1')
                                            Diterima
                                        @else
                                            @if ($item->status == '0')
                                                Ditolak
                                            @endif
                                        @endif
                                    @endif
                                </span>
                            </td>
                            <td>
                                <div class="flex gap-1">

                                    <a href="{{ route('dispensasi.show', $item->id) }}"
                                        class="btn btn-primary btn-sm">Detail</a>

                                    <form action="{{ route('dispensasi.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"
                                            onclick="return confirm('Apakah anda yakin ingin menghapusnya?')"
                                            class="btn btn-outline-danger btn-sm">Delete</button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
