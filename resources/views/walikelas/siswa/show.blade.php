<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-slate-800 leading-tight">
                {{ __('Detail Siswa: ') . $siswa->nama }}
            </h2>
            <a href="{{ route('walikelas.dashboard') }}"
                class="text-sm font-semibold text-teal-600 hover:text-teal-800">&larr; Kembali ke Dasbor</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                {{-- KOLOM KIRI --}}
                <div class="lg:col-span-1 space-y-6">

                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-slate-900 border-b border-slate-200 pb-4">Profil Siswa
                            </h3>
                            <div class="mt-4 space-y-2 text-sm">
                                <p><strong class="text-slate-500">Nama:</strong><br>{{ $siswa->nama }}</p>
                                <p><strong class="text-slate-500">NIS:</strong><br>{{ $siswa->nis }}</p>
                                <p><strong class="text-slate-500">Kelas:</strong><br>{{ $siswa->kelas }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-slate-900 border-b border-slate-200 pb-4">Aksi Cepat
                            </h3>
                            <div class="mt-4 space-y-2">
                                @if ($siswa->waliMurid && $siswa->waliMurid->nomor_telepon)
                                    @php
                                        // 1. Format Nomor WA
                                        $nomorWhatsapp = preg_replace('/^0/', '62', $siswa->waliMurid->nomor_telepon);

                                        // 2. Rangkai Pesan Pembuka
                                        $teks = 'Selamat pagi/siang Bapak/Ibu ' . $siswa->waliMurid->nama . ".\n\n";
                                        $teks .=
                                            'Saya selaku wali kelas ananda *' .
                                            $siswa->nama .
                                            "* ingin berdiskusi mengenai perkembangan siswa di sekolah.\n\n";

                                        // 3. Ambil laporan BK terakhir (jika ada dokumennya)
                                        $laporanTerakhir = $siswa->laporanBimbingan->sortByDesc('created_at')->first();

                                        if ($laporanTerakhir && $laporanTerakhir->dokumen->isNotEmpty()) {
                                            $teks .=
                                                "Berikut adalah tautan dokumen laporan terbaru dari pihak sekolah (silakan diklik untuk mengunduh):\n";
                                            foreach ($laporanTerakhir->dokumen as $dokumen) {
                                                $namaSurat = ucwords(str_replace('_', ' ', $dokumen->jenis_surat));
                                                $linkSurat = asset('storage/' . $dokumen->file_path);
                                                $teks .= '- ' . $namaSurat . ":\n" . $linkSurat . "\n\n";
                                            }
                                        } else {
                                            $teks .= 'Mohon kesediaannya untuk membalas pesan ini. Terima kasih.';
                                        }

                                        // 4. Encode ke URL
                                        $pesan = urlencode($teks);
                                    @endphp
                                    <a href="https://wa.me/{{ $nomorWhatsapp }}?text={{ $pesan }}"
                                        target="_blank"
                                        class="block w-full text-center px-4 py-2 bg-green-50 text-green-700 rounded-lg text-sm font-semibold hover:bg-green-100">
                                        <i class="fab fa-whatsapp mr-1"></i> Hubungi Ortu (WA)
                                    </a>
                                @else
                                    <p class="text-xs text-center text-slate-400 italic">Nomor telepon orang tua tidak
                                        tersedia.</p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                        <div class="p-6 text-center">
                            <p class="text-sm font-medium text-slate-500">Total Poin Pelanggaran</p>
                            <p
                                class="text-5xl font-bold mt-2 {{ $siswa->totalPoin() > 50 ? 'text-red-500' : 'text-teal-600' }}">
                                {{ $siswa->totalPoin() }}
                            </p>
                        </div>
                    </div>

                </div>

                {{-- KOLOM KANAN --}}
                <div class="lg:col-span-2 space-y-6">

                    {{-- MODIFIKASI: RIWAYAT PELANGGARAN --}}
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-slate-900 border-b border-slate-200 pb-4 mb-4">Riwayat
                                Pelanggaran</h3>
                            <div class="overflow-x-auto">
                                <table class="min-w-full">
                                    <thead class="bg-slate-50">
                                        <tr>
                                            <th
                                                class="px-4 py-2 text-left text-xs font-medium text-slate-500 uppercase">
                                                Pelanggaran</th>
                                            <th
                                                class="px-4 py-2 text-left text-xs font-medium text-slate-500 uppercase">
                                                Poin</th>
                                            <th
                                                class="px-4 py-2 text-left text-xs font-medium text-slate-500 uppercase">
                                                Tanggal</th>
                                            <th
                                                class="px-4 py-2 text-left text-xs font-medium text-slate-500 uppercase">
                                                Bukti & Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-slate-200">
                                        @forelse ($siswa->pelanggaran as $pelanggaran)
                                            <tr>
                                                <td class="px-4 py-3 text-sm text-slate-800">
                                                    {{ $pelanggaran->jenisPelanggaran->nama_pelanggaran }}</td>
                                                <td class="px-4 py-3 text-sm font-bold text-slate-800">
                                                    {{ $pelanggaran->jenisPelanggaran->poin }}</td>
                                                <td class="px-4 py-3 text-sm text-slate-500">
                                                    {{ \Carbon\Carbon::parse($pelanggaran->tanggal_pelanggaran)->isoFormat('D MMM YYYY') }}
                                                </td>
                                                <td class="px-4 py-3 text-sm">
                                                    @if ($pelanggaran->bukti_pelanggaran)
                                                        <div class="flex flex-col gap-2">
                                                            {{-- Tombol Lihat File --}}
                                                            <a href="{{ Storage::url($pelanggaran->bukti_pelanggaran) }}"
                                                                target="_blank"
                                                                class="inline-flex items-center justify-center px-3 py-1 text-xs font-semibold text-teal-700 bg-teal-100 rounded-md hover:bg-teal-200 transition">Lihat
                                                                File</a>

                                                            {{-- Tombol Kirim WA --}}
                                                            @if ($siswa->waliMurid && $siswa->waliMurid->nomor_telepon)
                                                                @php
                                                                    $wa = preg_replace(
                                                                        '/^0/',
                                                                        '62',
                                                                        $siswa->waliMurid->nomor_telepon,
                                                                    );
                                                                    $linkBukti = asset(
                                                                        'storage/' . $pelanggaran->bukti_pelanggaran,
                                                                    );
                                                                    $teks =
                                                                        'Halo Bapak/Ibu ' .
                                                                        $siswa->waliMurid->nama .
                                                                        ".\n\nKami menginformasikan bahwa ananda *" .
                                                                        $siswa->nama .
                                                                        '* tercatat melakukan pelanggaran: *' .
                                                                        $pelanggaran->jenisPelanggaran
                                                                            ->nama_pelanggaran .
                                                                        "*.\n\nBerikut adalah tautan bukti pelanggarannya (silakan diklik):\n" .
                                                                        $linkBukti;
                                                                    $pesanBukti = urlencode($teks);
                                                                @endphp
                                                                <a href="https://wa.me/{{ $wa }}?text={{ $pesanBukti }}"
                                                                    target="_blank"
                                                                    class="inline-flex items-center justify-center px-3 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-md hover:bg-green-200 transition"><i
                                                                        class="fab fa-whatsapp mr-1"></i> Kirim WA</a>
                                                            @else
                                                                <span
                                                                    class="text-[10px] text-red-500 italic text-center">No
                                                                    WA Kosong</span>
                                                            @endif
                                                        </div>
                                                    @else
                                                        <span class="text-xs text-slate-400 italic">Tidak ada
                                                            bukti</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="px-4 py-3 text-center text-sm text-slate-500">
                                                    Tidak ada riwayat pelanggaran.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-slate-900 border-b border-slate-200 pb-4 mb-4">Riwayat
                                Bimbingan</h3>
                            <div class="overflow-x-auto">
                                <table class="min-w-full">
                                    <thead class="bg-slate-50">
                                        <tr>
                                            <th
                                                class="px-4 py-2 text-left text-xs font-medium text-slate-500 uppercase">
                                                Tanggal Jadwal</th>
                                            <th
                                                class="px-4 py-2 text-left text-xs font-medium text-slate-500 uppercase">
                                                Konselor</th>
                                            <th
                                                class="px-4 py-2 text-left text-xs font-medium text-slate-500 uppercase">
                                                Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-slate-200">
                                        @forelse ($siswa->jadwalBimbingan as $jadwal)
                                            <tr>
                                                <td class="px-4 py-3 text-sm text-slate-800">
                                                    {{ \Carbon\Carbon::parse($jadwal->tanggal_jadwal)->isoFormat('D MMM YYYY') }}
                                                </td>
                                                <td class="px-4 py-3 text-sm text-slate-500">
                                                    {{ $jadwal->konselor->name }}</td>
                                                <td class="px-4 py-3 text-sm">
                                                    @if ($jadwal->laporan)
                                                        <a href="{{ route('walikelas.laporan.show', $jadwal->laporan->id) }}"
                                                            class="inline-block px-3 py-1 text-sm font-semibold text-teal-600 bg-teal-50 rounded-md hover:bg-teal-100">
                                                            Lihat Laporan
                                                        </a>
                                                    @else
                                                        <span class="text-xs text-slate-400 italic">Belum ada
                                                            laporan</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="3" class="px-4 py-3 text-center text-sm text-slate-500">
                                                    Tidak ada riwayat bimbingan.</td>
                                            </tr>
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
