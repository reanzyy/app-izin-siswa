<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl leading-tight">
            {{ __('Sekolah') }}
        </h2>
    </x-slot>

    @if ($message = Session::get('message'))
        <div class="alert alert-success fade show mt-4 -mb-5 mx-4" role="alert">
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="overflow-hidden sm-rounded-md my-5 mx-4">
        <div class="px-4 py-4 sm:p-6 ">

            <div class="row">
                <div class="col-4">
                    <div class="md:col-span-1 flex justify-between">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium text-gray-900">Update Information</h3>

                            <p class="mt-1 text-sm text-gray-600">
                                Update School information.
                            </p>

                            <img src="/adminlte/img/neper.png" class="img-fluid mt-5" width="200">

                        </div>
                    </div>


                </div>
                <div class="col-8">
                    @foreach ($sekolah as $item)
                        <div class="mt-4 md:mt-0 md:col-span-2">
                            <form action="{{ route('sekolah.update', $item->id) }}" method="post">
                                @csrf
                                <div class="px-4 py-5 bg-white sm:p-6 shadow flex flex-col gap-6">
                                    <div class="grid">
                                        <label class="block font-medium text-sm text-gray-700">Nama</label>
                                        <input type="text"
                                            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                            name="nama_sekolah" value="{{ $item->nama_sekolah }}" autocomplete="off">
                                    </div>
                                    <div class="grid">
                                        <label class="block font-medium text-sm text-gray-700">Alamat</label>
                                        <input type="text"
                                            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                            name="alamat_sekolah" value="{{ $item->alamat_sekolah }}"
                                            autocomplete="off">
                                    </div>
                                    <div class="grid">
                                        <label class="block font-medium text-sm text-gray-700">Telepon</label>
                                        <input type="text"
                                            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                            name="telepon_sekolah" value="{{ $item->telepon_sekolah }}"
                                            autocomplete="off">
                                    </div>
                                    <button type="submit"
                                        class="col-2 px-4 py-2 bg-gray-800 text-white border border-gray-300 rounded-md font-semibold text-xs uppercase tracking-widest shadow-sm hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">Save</button>
                                </div>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
