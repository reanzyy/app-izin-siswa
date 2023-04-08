<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl leading-tight">
            {{ __('Dispensasi') }}
        </h2>
    </x-slot>

    <div class="shadow overflow-hidden sm-rounded-md mt-5 mx-4">
        <div class="px-4 py-5 bg-white sm:p-6 ">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Jam</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</x-app-layout>
