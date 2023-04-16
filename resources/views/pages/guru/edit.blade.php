<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl leading-tight">
            {{ __('Guru') }}
        </h2>
    </x-slot>

    <div class="shadow overflow-hidden sm-rounded-md my-5 mx-4">
        <div class="px-4 py-5 bg-white sm:p-6 ">
            <form action="{{ route('guru.update', $guru->id) }}" method="post">
                @csrf
                @method('put')

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Kelas</label>
                            <input type="text" name="nama_guru" class="form-control" id="nama"
                                value="{{ old('nama_guru') ?? $guru->nama_guru }}">
                        </div>
                    </div>
                    <div class="col-6"></div>

                    <div class="col-6">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-outline-success">Simpan Data</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>
