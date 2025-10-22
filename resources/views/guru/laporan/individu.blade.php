<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-slate-800 leading-tight">
                {{ __('Laporan Kasus Individu') }}
            </h2>
            <a href="{{ route('guru.laporan.siswa.pdf', $siswa->id) }}" 
               class="inline-flex items-center bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium px-4 py-2 rounded-lg shadow-sm transition-all">
                Download PDF
            </a>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 space-y-8">

            {{-- Data Siswa --}}
            <div class="bg-white shadow-md rounded-xl p-6 border border-slate-100">
                <h3 class="text-lg font-semibold text-slate-700 mb-4 border-b pb-2">Data Siswa</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-slate-700">
                    <div><span class="font-medium">Nama:</span> {{ $siswa->nama }}</div>
                    <div><span class="font-medium">NIS:</span> {{ $siswa->nis }}</div>
                    <div><span class="font-medium">Kelas:</span> {{ $siswa->kelas }}</div>
                    <div><span class="font-medium">Total Poin Pelanggaran:</span> 
                        <span class="text-red-600 font-semibold">{{ $siswa->totalPoin() }} poin</span>
                    </div>
                </div>
            </div>

            {{-- Riwayat Pelanggaran --}}
            <div class="bg-white shadow-md rounded-xl p-6 border border-slate-100">
                <h3 class="text-lg font-semibold text-slate-700 mb-4 border-b pb-2">Riwayat Pelanggaran</h3>
                @if ($siswa->pelanggaran->isEmpty())
                    <p class="text-slate-500 italic">Tidak ada pelanggaran tercatat.</p>
                @else
                    <div class="overflow-x-auto">
                        <table class="min-w-full border border-slate-200 rounded-lg">
                            <thead class="bg-slate-50 text-slate-700">
                                <tr>
                                    <th class="px-4 py-2 text-left text-sm font-semibold">Tanggal</th>
                                    <th class="px-4 py-2 text-left text-sm font-semibold">Jenis Pelanggaran</th>
                                    <th class="px-4 py-2 text-left text-sm font-semibold">Poin</th>
                                    <th class="px-4 py-2 text-left text-sm font-semibold">Catatan</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-200">
                                @foreach ($siswa->pelanggaran as $pel)
                                    <tr class="hover:bg-slate-50">
                                        <td class="px-4 py-2 text-sm">{{ \Carbon\Carbon::parse($pel->tanggal_pelanggaran)->format('d M Y') }}</td>
                                        <td class="px-4 py-2 text-sm">{{ $pel->jenisPelanggaran->nama_pelanggaran }}</td>
                                        <td class="px-4 py-2 text-sm text-red-600 font-semibold">{{ $pel->jenisPelanggaran->poin }}</td>
                                        <td class="px-4 py-2 text-sm">{{ $pel->catatan ?? '-' }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>

            {{-- Riwayat Bimbingan Konseling --}}
            <div class="bg-white shadow-md rounded-xl p-6 border border-slate-100">
                <h3 class="text-lg font-semibold text-slate-700 mb-4 border-b pb-2">Riwayat Bimbingan Konseling</h3>
                @if ($siswa->laporanBimbingan->isEmpty())
                    <p class="text-slate-500 italic">Belum ada laporan bimbingan.</p>
                @else
                    <div class="space-y-4">
                        @foreach ($siswa->laporanBimbingan->sortByDesc('created_at') as $lap)
                            <div class="border border-slate-200 rounded-lg p-4 hover:shadow-sm transition">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <p class="text-sm text-slate-500 mb-1">
                                            {{ \Carbon\Carbon::parse($lap->created_at)->translatedFormat('d F Y') }}
                                        </p>
                                        <p class="text-slate-800 font-medium">{{ Str::limit($lap->isi_laporan, 150) }}</p>
                                        @if($lap->rencana_tindak_lanjut)
                                            <p class="text-slate-500 text-sm mt-1">
                                                <span class="font-semibold text-slate-600">Tindak Lanjut:</span> 
                                                {{ Str::limit($lap->rencana_tindak_lanjut, 100) }}
                                            </p>
                                        @endif
                                    </div>
                                    @if($lap->jenis_surat)
                                        <span class="text-xs bg-indigo-50 text-indigo-700 px-2 py-1 rounded-md border border-indigo-100">
                                            {{ $lap->jenis_surat }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>

        </div>
    </div>
</x-app-layout>
