<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl leading-tight">
            {{ __('Kelas') }}
        </h2>
    </x-slot>

    <div class="shadow overflow-hidden sm-rounded-md mt-5 mx-4">
        <div class="px-4 py-5 bg-white sm:p-6 ">
            <form action="/jampelajaran/create/store">
                @csrf
                <div class="col-6">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Jam Pelajaran</label>
                        <input type="text" name="jam_pelajaran" class="form-control" id="nama">
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-outline-success">Simpan Data</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</x-app-layout>
