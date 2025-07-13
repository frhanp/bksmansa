<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Dasbor Guru BK') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-slate-900 mb-4">Jadwal Bimbingan Terdekat</h3>
                        <div class="space-y-4">
                            @forelse ($jadwalAkanDatang as $jadwal)
                                <div class="p-4 bg-slate-50 rounded-lg">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <p class="font-semibold text-teal-700">{{ $jadwal->siswa->nama }}</p>
                                            <p class="text-sm text-slate-500">{{ $jadwal->siswa->kelas }}</p>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-sm font-medium text-slate-800">{{ \Carbon\Carbon::parse($jadwal->tanggal_jadwal)->isoFormat('dddd, D MMM') }}</p>
                                            <p class="text-xs text-slate-500">{{ \Carbon\Carbon::parse($jadwal->tanggal_jadwal)->isoFormat('HH:mm') }}</p>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p class="text-center text-sm text-slate-500 py-4">Tidak ada jadwal terverifikasi yang akan datang.</p>
                            @endforelse
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-slate-900 mb-4">Siswa dengan Poin Pelanggaran Tertinggi</h3>
                        <div class="overflow-x-auto">
                            <table class="min-w-full">
                                <thead class="border-b border-slate-200">
                                    <tr>
                                        <th class="py-2 text-left text-xs font-semibold text-slate-500 uppercase">Nama Siswa</th>
                                        <th class="py-2 text-left text-xs font-semibold text-slate-500 uppercase">Kelas</th>
                                        <th class="py-2 text-center text-xs font-semibold text-slate-500 uppercase">Total Poin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($siswaPoinTertinggi as $siswa)
                                        <tr class="border-b border-slate-100">
                                            <td class="py-3 text-sm font-medium text-slate-800">{{ $siswa->nama }}</td>
                                            <td class="py-3 text-sm text-slate-500">{{ $siswa->kelas }}</td>
                                            <td class="py-3 text-sm font-bold text-center {{ $siswa->total_poin > 50 ? 'text-red-500' : 'text-slate-800' }}">{{ $siswa->total_poin }}</td>
                                        </tr>
                                    @empty
                                        <tr><td colspan="3" class="py-3 text-center text-sm text-slate-500">Data pelanggaran masih kosong.</td></tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>