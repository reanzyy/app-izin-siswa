<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl leading-tight">
            {{ __('Jam Pelajaran') }}
        </h2>
    </x-slot>

    <div class="shadow overflow-hidden sm-rounded-md my-5 mx-4">
        <div class="px-4 py-5 bg-white sm:p-6 ">
            <form action="{{ route('jam.update', $jam->id) }}" method="POST">
                @csrf
                @method('put')

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Jam Pelajaran</label>
                            <input type="text" name="jam" value="{{ old('jam') ?? $jam->jam }}"
                                class="form-control" id="nama">
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
