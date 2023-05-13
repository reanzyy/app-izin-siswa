<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl leading-tight">
            {{ __('Laporan') }}
        </h2>
    </x-slot>

    <div class="shadow overflow-hidden sm-rounded-md my-5 mx-4">
        <div class="px-4 py-4 bg-white sm:p-6 ">
            {{-- <form method="get"> --}}
            <div class="row car-body">
                <div class="input-group col-lg-3">
                    <input type="date" id="txtTglAwal" name="txtTglAwal" class="form-control"
                        value="{{ old('txtTglAwal') }}" size="10">
                </div>
                @error('txtTglAwal')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="input-group col-lg-3">
                    <input type="date" id="txtTglAkhir" name="txtTglAkhir" class="form-control"
                        value="{{ old('txtTglAkhir') }}" size="10">
                </div>
                @error('txtTglAkhir')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="input-group col-lg-3">
                    <a onclick="this.href='/cetak-laporan/'+ document.getElementById('txtTglAwal').value + '/' + document.getElementById('txtTglAkhir').value "
                        target="_blank" class="btn btn-primary">Cetak</a>
                </div>
            </div>
            {{-- </form> --}}
        </div>
    </div>
</x-app-layout>
