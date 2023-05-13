<x-app-layout>
    <x-slot name='header'>
        <h2 class="font-semibold text-2xl leading-tight">
            Dispensasi &raquo; Pilih guru
        </h2>
    </x-slot>

    @if ($message = Session::get('cetak'))
        <div class="alert alert-warning fade show mt-4 -mb-5 mx-4" role="alert">
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="shadow overflow-hidden sm-rounded-md my-5 mx-4">
        <div class="px-4 py-4 bg-white sm:p-6 ">
            <form action="{{ route('pilihGuru', $dispensasi->id) }}" method="post">
                @csrf
                <div class="m-3">
                    <label class="form-label">Nama Siswa</label>
                    <input type="hidden" name="no_d" value="{{ $dispensasi->id }}">
                    <select class="form-control" disabled>
                        <option>{{ $dispensasi->nama_siswa }}</option>
                    </select>
                </div>
                <div class="m-3">
                    <label class="form-label">Pilih guru piket</label>
                    <select name="id_guru" class="form-control" {{ $dispensasi->id_guru == '' ? '' : 'disabled' }}>
                        <option value="">
                            {{ $dispensasi->id_guru == '' ? 'Pilih Guru Piket' : $dispensasi->guru->nama_guru }}
                        </option>
                        <option disabled>
                            ---------------
                        </option>
                        @foreach ($guru as $item)
                            <option value="{{ $item->id }}">
                                {{ $item->nama_guru }}</option>
                        @endforeach
                    </select>
                    @error('id_guru')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="m-3">

                    @if (!$dispensasi->id_guru == '')
                        <a href="{{ route('formCetak', $dispensasi->id) }}" target="_blank"
                            class="btn btn-sm btn-primary float-right">Lihat
                            cetakan</a>
                        <div class="clear-both"></div>
                    @else
                        <button type="button" class="btn btn-sm btn-outline-success float-right" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Cetak</button>
                        <div class="clear-both"></div>
                    @endif


                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" data-bs-dismiss="modal" aria-label="Close">
                                        <span class="text-2xl" aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Anda yakin ingin mencetaknya?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary btn-sm"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-sm btn-outline-success">Cetak</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</x-app-layout>
