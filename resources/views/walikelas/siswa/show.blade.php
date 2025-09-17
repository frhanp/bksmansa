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

                {{-- KOLOM KIRI --}}
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
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-slate-900 border-b border-slate-200 pb-4">Aksi Cepat</h3>
                            <div class="mt-4 space-y-2">
                                @if($siswa->waliMurid && $siswa->waliMurid->nomor_telepon)
                                    @php
                                        // Menggunakan 'nomor_telepon' sesuai digest
                                        $nomorWhatsapp = preg_replace('/^0/', '62', $siswa->waliMurid->nomor_telepon);
                                        $pesan = urlencode("Selamat pagi/siang Bapak/Ibu " . $siswa->waliMurid->nama . ", saya selaku wali kelas ananda " . $siswa->nama . " ingin berdiskusi.");
                                    @endphp
                                    <a href="https://wa.me/{{ $nomorWhatsapp }}?text={{ $pesan }}" target="_blank" class="block w-full text-center px-4 py-2 bg-green-50 text-green-700 rounded-lg text-sm font-semibold hover:bg-green-100">Hubungi Ortu (WA)</a>
                                @else
                                    <p class="text-xs text-center text-slate-400 italic">Nomor telepon orang tua tidak tersedia.</p>
                                @endif
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

                {{-- KOLOM KANAN --}}
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
                                            <th class="px-4 py-2 text-left text-xs font-medium text-slate-500 uppercase">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-slate-200">
                                        @forelse ($siswa->jadwalBimbingan as $jadwal)
                                            <tr>
                                                <td class="px-4 py-3 text-sm text-slate-800">{{ \Carbon\Carbon::parse($jadwal->tanggal_jadwal)->isoFormat('D MMM YYYY') }}</td>
                                                <td class="px-4 py-3 text-sm text-slate-500">{{ $jadwal->konselor->name }}</td>
                                                <td class="px-4 py-3 text-sm">
                                                    @if($jadwal->laporan)
                                                        <a href="{{ route('walikelas.laporan.show', $jadwal->laporan->id) }}" class="inline-block px-3 py-1 text-sm font-semibold text-teal-600 bg-teal-50 rounded-md hover:bg-teal-100">
                                                            Lihat Laporan
                                                        </a>
                                                    @else
                                                        <span class="text-xs text-slate-400 italic">Belum ada laporan</span>
                                                    @endif
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