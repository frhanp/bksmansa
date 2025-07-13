<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Dasbor Kepala Sekolah') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
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
                           <svg class="h-6 w-6 text-slate-500 group-hover:text-teal-600 transition-colors duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.007H12v-.007Z" /></svg>
                        </div>
                        <p class="font-semibold text-slate-700">Total Pelanggaran</p>
                    </div>
                    <p class="mt-4 text-4xl font-bold text-slate-900">{{ $totalPelanggaran }}</p>
                </div>
                
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl p-6 group transition-all duration-300 hover:shadow-lg">
                    <div class="flex items-center gap-4">
                        <div class="bg-slate-100 group-hover:bg-teal-100 rounded-lg p-2 transition-colors duration-300">
                          <svg class="h-6 w-6 text-slate-500 group-hover:text-teal-600 transition-colors duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg>
                        </div>
                        <p class="font-semibold text-slate-700">Bimbingan Selesai</p>
                    </div>
                    <p class="mt-4 text-4xl font-bold text-slate-900">{{ $totalBimbinganSelesai }}</p>
                </div>
            </div>

            <div class="mt-8 bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-6">
                    <h3 class="text-lg font-medium text-slate-900 mb-4">Laporan Bimbingan Terbaru</h3>
                    <div class="overflow-x-auto border-t border-slate-200">
                        <table class="min-w-full divide-y divide-slate-200">
                            <thead class="bg-slate-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Tanggal</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Siswa</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Kelas</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Konselor</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Aksi</th>
                                </tr>
                            </thead>
                             <tbody class="bg-white divide-y divide-slate-200">
                                @forelse ($laporanTerbaru as $laporan)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">{{ $laporan->created_at->isoFormat('D MMM YYYY') }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">{{ $laporan->jadwalBimbingan->siswa->nama }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">{{ $laporan->jadwalBimbingan->siswa->kelas }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">{{ $laporan->dibuatOleh->name }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            {{-- Nanti link ini bisa diarahkan ke detail laporan jika diperlukan --}}
                                            <a href="{{ route('kepsek.laporan.show', $laporan->id) }}" class="inline-block px-3 py-1 text-sm font-semibold text-teal-600 bg-teal-50 rounded-md hover:bg-teal-100">Lihat Laporan</a>
                                        </td>
                                    </tr>
                                @empty
                                     <tr>
                                        <td colspan="5" class="px-6 py-4 text-center text-slate-500">Belum ada laporan bimbingan yang selesai.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>