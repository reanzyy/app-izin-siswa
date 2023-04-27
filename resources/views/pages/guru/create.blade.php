<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl leading-tight">
            Guru &raquo; Tambah data
        </h2>
    </x-slot>

    <div class="shadow overflow-hidden sm-rounded-md mt-5 mx-4">
        <div class="px-4 py-5 bg-white sm:p-6 ">
            <form action="{{ route('guru.store') }}" method="post">
                @csrf

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Guru</label>
                            <input type="text" name="nama_guru" class="form-control" id="nama">
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
