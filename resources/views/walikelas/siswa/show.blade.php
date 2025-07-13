<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-slate-800 leading-tight">
                {{ __('Detail Siswa: ') . $siswa->nama }}
            </h2>
            <a href="{{ route('walikelas.dashboard') }}" class="text-sm font-semibold text-teal-600 hover:text-teal-800">&larr; Kembali ke Dasbor</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                <div class="lg:col-span-1 space-y-6">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-slate-900 border-b border-slate-200 pb-4">Profil Siswa</h3>
                            <div class="mt-4 space-y-2 text-sm">
                                <p><strong class="text-slate-500">Nama:</strong><br>{{ $siswa->nama }}</p>
                                <p><strong class="text-slate-500">NIS:</strong><br>{{ $siswa->nis }}</p>
                                <p><strong class="text-slate-500">Kelas:</strong><br>{{ $siswa->kelas }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                        <div class="p-6 text-center">
                            <p class="text-sm font-medium text-slate-500">Total Poin Pelanggaran</p>
                            <p class="text-5xl font-bold mt-2 {{ $siswa->totalPoin() > 50 ? 'text-red-500' : 'text-teal-600' }}">
                                {{ $siswa->totalPoin() }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-2 space-y-6">
                     <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                        <div class="p-6">
                             <h3 class="text-lg font-medium text-slate-900 border-b border-slate-200 pb-4 mb-4">Riwayat Pelanggaran</h3>
                            <div class="overflow-x-auto">
                                <table class="min-w-full">
                                    <thead class="bg-slate-50">
                                        <tr>
                                            <th class="px-4 py-2 text-left text-xs font-medium text-slate-500 uppercase">Pelanggaran</th>
                                            <th class="px-4 py-2 text-left text-xs font-medium text-slate-500 uppercase">Poin</th>
                                            <th class="px-4 py-2 text-left text-xs font-medium text-slate-500 uppercase">Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-slate-200">
                                        @forelse ($siswa->pelanggaran as $pelanggaran)
                                            <tr>
                                                <td class="px-4 py-3 text-sm text-slate-800">{{ $pelanggaran->jenisPelanggaran->nama_pelanggaran }}</td>
                                                <td class="px-4 py-3 text-sm font-bold text-slate-800">{{ $pelanggaran->jenisPelanggaran->poin }}</td>
                                                <td class="px-4 py-3 text-sm text-slate-500">{{ \Carbon\Carbon::parse($pelanggaran->tanggal_pelanggaran)->isoFormat('D MMM YYYY') }}</td>
                                            </tr>
                                        @empty
                                            <tr><td colspan="3" class="px-4 py-3 text-center text-sm text-slate-500">Tidak ada riwayat pelanggaran.</td></tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-slate-900 border-b border-slate-200 pb-4 mb-4">Riwayat Bimbingan</h3>
                             <div class="overflow-x-auto">
                                <table class="min-w-full">
                                    <thead class="bg-slate-50">
                                        <tr>
                                            <th class="px-4 py-2 text-left text-xs font-medium text-slate-500 uppercase">Tanggal Jadwal</th>
                                            <th class="px-4 py-2 text-left text-xs font-medium text-slate-500 uppercase">Konselor</th>
                                            <th class="px-4 py-2 text-left text-xs font-medium text-slate-500 uppercase">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-slate-200">
                                        @forelse ($siswa->jadwalBimbingan as $jadwal)
                                            <tr>
                                                <td class="px-4 py-3 text-sm text-slate-800">{{ \Carbon\Carbon::parse($jadwal->tanggal_jadwal)->isoFormat('D MMM YYYY') }}</td>
                                                <td class="px-4 py-3 text-sm text-slate-500">{{ $jadwal->konselor->name }}</td>
                                                <td class="px-4 py-3 text-sm">
                                                     @php
                                                        $statusClass = [
                                                            'menunggu_verifikasi' => 'bg-amber-100 text-amber-800',
                                                            'terverifikasi' => 'bg-blue-100 text-blue-800',
                                                            'selesai' => 'bg-green-100 text-green-800',
                                                            'dibatalkan' => 'bg-red-100 text-red-800',
                                                        ][$jadwal->status] ?? 'bg-slate-100 text-slate-800';
                                                    @endphp
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $statusClass }}">
                                                        {{ str_replace('_', ' ', Str::title($jadwal->status)) }}
                                                    </span>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr><td colspan="3" class="px-4 py-3 text-center text-sm text-slate-500">Tidak ada riwayat bimbingan.</td></tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>