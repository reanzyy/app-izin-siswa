<x-app-layout>
    <x-slot name="header">
        <div class="mt-4 mb-24">
            <div class="row">
                <div class="col-6">
                    <h2 class="font-semibold text-xl text-white leading-tight">
                        {{ __('Dashboard') }}
                    </h2>
                    <p class="text-white font-extralight">
                        Administrator Panel
                    </p>
                </div>
                <div class="col-6">
                </div>
            </div>
        </div>
    </x-slot>

    <div class="container px-4 -translate-y-14">
        <div class="bg-white rounded py-7 border border-gray-300 shadow">
            <div class="row px-5">
                <div class="col-8">
                    <div class="flex justify-start items-center h-100">
                        <div>
                            <h2 class="text-gray-700 text-2xl font-extrabold leading-tight mb-2">Selamat Datang
                                <span class="text-blue-600"> {{ Auth::user()->name }}!</span>
                            </h2>
                            <p class="font-semibold text-gray-700">
                                Di Website Aplikasi Izin Keluar Lingkungan Sekolah
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class=" flex items-center justify-center">
                        <img src="{{ url('adminlte/img/undraw_mathematics_-4-otb.svg') }}" class="img-fluid"
                            width="200" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-lg-3 col-6">

                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $dispensasi }}</h3>
                        <p>Dispensasi</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-file-medical"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $kelas }}</h3>
                        <p>Kelas</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $jurusan }}</h3>
                        <p>Jurusan</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{ $guru }}</h3>
                        <p>Guru Piket</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
