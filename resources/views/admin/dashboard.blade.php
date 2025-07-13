<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Dasbor Admin BK') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-amber-500/10 border border-amber-500/20 text-amber-800 rounded-xl p-6 flex flex-col justify-between transition-all duration-300 hover:shadow-lg hover:border-amber-500/30">
                    <div>
                        <div class="flex items-center gap-4">
                            <div class="bg-amber-500/20 p-2 rounded-lg">
                                <svg class="h-6 w-6 text-amber-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg>
                            </div>
                            <p class="font-semibold">Jadwal Perlu Verifikasi</p>
                        </div>
                        <p class="mt-4 text-5xl font-bold">{{ $jadwalPerluVerifikasi }}</p>
                    </div>
                    <a href="#" class="mt-4 text-sm font-semibold hover:underline">Lihat Detail &rarr;</a>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl p-6 group transition-all duration-300 hover:shadow-lg">
                    <div class="flex items-center gap-4">
                        <div class="bg-slate-100 group-hover:bg-teal-100 rounded-lg p-2 transition-colors duration-300">
                             <svg class="h-6 w-6 text-slate-500 group-hover:text-teal-600 transition-colors duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" /></svg>
                        </div>
                        <p class="font-semibold text-slate-700">Jenis Pelanggaran</p>
                    </div>
                    <p class="mt-4 text-4xl font-bold text-slate-900">{{ $totalJenisPelanggaran }}</p>
                </div>
                
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl p-6 group transition-all duration-300 hover:shadow-lg">
                    <div class="flex items-center gap-4">
                        <div class="bg-slate-100 group-hover:bg-teal-100 rounded-lg p-2 transition-colors duration-300">
                             <svg class="h-6 w-6 text-slate-500 group-hover:text-teal-600 transition-colors duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" /></svg>
                        </div>
                        <p class="font-semibold text-slate-700">Total Siswa</p>
                    </div>
                    <p class="mt-4 text-4xl font-bold text-slate-900">{{ $totalSiswa }}</p>
                </div>
                
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl p-6 group transition-all duration-300 hover:shadow-lg">
                    <div class="flex items-center gap-4">
                        <div class="bg-slate-100 group-hover:bg-teal-100 rounded-lg p-2 transition-colors duration-300">
                           <svg class="h-6 w-6 text-slate-500 group-hover:text-teal-600 transition-colors duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m-7.5-2.962a3.75 3.75 0 0 1 5.958 0m0 0a3.75 3.75 0 0 1-5.958 0M3 18.72a9.094 9.094 0 0 1 3.741-.479 3 3 0 0 1 4.682-2.72M12 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" /></svg>
                        </div>
                        <p class="font-semibold text-slate-700">Pengguna Sistem</p>
                    </div>
                    <p class="mt-4 text-4xl font-bold text-slate-900">{{ $totalPengguna }}</p>
                </div>
            </div>

            <div class="mt-8 grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="lg:col-span-1 bg-white p-6 shadow-sm sm:rounded-xl">
                    <h3 class="font-semibold text-slate-900 mb-4">Akses Cepat</h3>
                    <div class="space-y-3">
                        <a href="{{ route('admin.jenis-pelanggaran.create') }}" class="group flex items-center justify-between p-3 bg-slate-50 hover:bg-teal-50 rounded-lg transition-colors duration-200">
                            <span class="font-medium text-slate-700 group-hover:text-teal-800">Tambah Pelanggaran Baru</span>
                            <span class="text-slate-400 group-hover:text-teal-600">&rarr;</span>
                        </a>
                         <a href="{{ route('admin.pengguna.create') }}" class="group flex items-center justify-between p-3 bg-slate-50 hover:bg-teal-50 rounded-lg transition-colors duration-200">
                            <span class="font-medium text-slate-700 group-hover:text-teal-800">Tambah Pengguna Baru</span>
                            <span class="text-slate-400 group-hover:text-teal-600">&rarr;</span>
                        </a>
                        <a href="{{ route('admin.jenis-pelanggaran.index') }}" class="group flex items-center justify-between p-3 bg-slate-50 hover:bg-teal-50 rounded-lg transition-colors duration-200">
                            <span class="font-medium text-slate-700 group-hover:text-teal-800">Lihat Semua Pelanggaran</span>
                            <span class="text-slate-400 group-hover:text-teal-600">&rarr;</span>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-2 bg-white p-6 shadow-sm sm:rounded-xl">
                     <h3 class="font-semibold text-slate-900 mb-4">Jenis Pelanggaran Baru Ditambahkan</h3>
                     <ul class="divide-y divide-slate-200">
                        @forelse($pelanggaranTerbaru as $item)
                            <li class="py-3 flex justify-between items-center">
                                <span class="text-sm text-slate-700">{{ $item->nama_pelanggaran }}</span>
                                <span class="text-sm font-bold text-slate-800 bg-slate-100 px-2 py-1 rounded-md">{{ $item->poin }} Poin</span>
                            </li>
                        @empty
                            <li class="py-3 text-center text-sm text-slate-500">Belum ada data baru.</li>
                        @endforelse
                     </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>