<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Dashboard Kepala Sekolah') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-6">
                <h3 class="text-lg font-medium text-slate-900">Selamat Datang, {{ Auth::user()->name }}!</h3>
                <p class="text-sm text-slate-500">Berikut adalah ringkasan statistik dari sistem Bimbingan Konseling.</p>
            </div>

            {{-- Grid untuk menampilkan card statistik --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                    <div class="p-6">
                        <p class="text-sm font-medium text-slate-500 truncate">Total Siswa</p>
                        <p class="mt-1 text-3xl font-semibold text-slate-900">{{ $stats['total_siswa'] }}</p>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                    <div class="p-6">
                        <p class="text-sm font-medium text-slate-500 truncate">Total Pelanggaran Dicatat</p>
                        <p class="mt-1 text-3xl font-semibold text-slate-900">{{ $stats['total_pelanggaran'] }}</p>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                    <div class="p-6">
                        <p class="text-sm font-medium text-slate-500 truncate">Total Laporan Bimbingan</p>
                        <p class="mt-1 text-3xl font-semibold text-slate-900">{{ $stats['total_laporan'] }}</p>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                    <div class="p-6">
                        <p class="text-sm font-medium text-slate-500 truncate">Jadwal Bimbingan Aktif</p>
                        <p class="mt-1 text-3xl font-semibold text-slate-900">{{ $stats['jadwal_aktif'] }}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>