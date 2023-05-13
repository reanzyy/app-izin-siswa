<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl leading-tight">
            {{ __('Guru') }}
        </h2>
    </x-slot>

    <div class="shadow overflow-hidden sm-rounded-md my-5 mx-4">
        <div class="px-4 py-4 bg-white sm:p-6 ">
            <a href="{{ route('guru.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
            <table id="tabel-data" class="table table-bordered">
                <thead>
                    <tr>
                        <th width="25">No</th>
                        <th>Guru</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                @foreach ($guru as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_guru }}</td>
                        <td>
                            <div class="flex gap-1">

                                <a href="{{ route('guru.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                <form action="{{ route('guru.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapusnya?')"
                                        class="btn btn-outline-danger btn-sm">Delete</button>
                                </form>

                            </div>
                        </td>
                    </tr>
                @endforeach
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
