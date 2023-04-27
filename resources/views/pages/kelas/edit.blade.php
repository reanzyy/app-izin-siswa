<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl leading-tight">
            Kelas &raquo; Edit data
        </h2>
    </x-slot>

    <div class="shadow overflow-hidden sm-rounded-md my-5 mx-4">
        <div class="px-4 py-5 bg-white sm:p-6 ">
            <form action="{{ route('kelas.update', $kela->id) }}" method="post">
                @csrf
                @method('put')

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Kelas</label>
                            <input type="text" name="nama_kelas" class="form-control" id="nama"
                                value="{{ old('nama_kelas') ?? $kela->nama_kelas }}">
                        </div>
                    </div>
                    <div class="col-6"></div>

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Jurusan</label>
                            <select name="id_jurusan" class="form-select">
                                <option value="{{ $kela->id_jurusan }}">{{ $kela->jurusan->nama_jurusan }}</option>
                                <option disabled>--------------------------</option>
                                @foreach ($jurusan as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_jurusan }}</option>
                                @endforeach
                            </select>
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
