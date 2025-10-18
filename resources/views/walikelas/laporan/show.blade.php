<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-slate-800">
            {{ __('Detail Laporan Bimbingan') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-2xl overflow-hidden">
                <div class="p-8 space-y-10">

                    {{-- ================= AWAL MODIFIKASI ================= --}}
                    {{-- HEADER (Mengikuti layout guru.laporan.show) --}}
                    <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4 pb-6 border-b border-slate-200">
                        <div>
                            <h3 class="text-2xl font-semibold text-slate-900">
                                Laporan untuk {{ $laporanBimbingan->jadwalBimbingan->siswa->nama }}
                            </h3>
                            <p class="text-sm text-slate-500 mt-1">
                                Dibuat oleh
                                <span class="font-medium text-slate-700">{{ $laporanBimbingan->pembuat->name }}</span>
                                • {{ $laporanBimbingan->created_at->isoFormat('dddd, D MMMM YYYY') }}
                            </p>
                        </div>
                        {{-- Sesuaikan rute kembali ke dashboard Wali Kelas --}}
                        <a href="{{ route('walikelas.dashboard') }}"
                           class="inline-flex items-center gap-1 text-sm font-medium text-teal-600 hover:text-teal-800 transition">
                            ← Kembali ke Dasbor
                        </a>
                    </div>

                    {{-- HIGHLIGHT: DOKUMEN (Mengikuti layout guru.laporan.show) --}}
                    <div class="bg-gradient-to-r from-teal-500 to-sky-500 text-white rounded-xl shadow-lg p-6">
                        <h4 class="text-base font-semibold uppercase tracking-wide mb-4">Dokumen Dihasilkan</h4>

                        @if ($laporanBimbingan->dokumen->isNotEmpty())
                            <ul class="space-y-3">
                                @foreach($laporanBimbingan->dokumen as $dokumen)
                                    <li class="flex items-center justify-between bg-white/20 rounded-lg px-4 py-2">
                                        <span class="text-sm font-medium">{{ str_replace('_', ' ', Str::title($dokumen->jenis_surat)) }}</span>
                                        <a href="{{ Storage::url($dokumen->file_path) }}"
                                           class="inline-flex items-center px-3 py-1 bg-white text-teal-700 rounded-md text-xs font-semibold hover:bg-slate-100 transition"
                                           download>
                                            Unduh (.docx)
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-sm text-white/80 italic">Tidak ada dokumen terkait laporan ini.</p>
                        @endif
                    </div>

                    {{-- GRID DETAIL (Mengikuti layout guru.laporan.show) --}}
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                        {{-- Kiri: Tindak Lanjut --}}
                        <div class="md:col-span-1 space-y-6">
                            <div class="bg-slate-50 rounded-lg p-5 border border-slate-200">
                                <h4 class="text-sm font-semibold text-slate-600 uppercase tracking-wide mb-2">
                                    Rencana Tindak Lanjut
                                </h4>
                                <p class="text-sm text-slate-800 leading-relaxed">
                                    {!! nl2br(e($laporanBimbingan->rencana_tindak_lanjut ?: '-')) !!}
                                </p>
                            </div>
                        </div>

                        {{-- Kanan: Isi Laporan --}}
                        <div class="md:col-span-2">
                            <div class="bg-slate-50 rounded-lg p-6 border border-slate-200 h-full">
                                <h4 class="text-sm font-semibold text-slate-600 uppercase tracking-wide mb-3">
                                    Isi Laporan Tambahan
                                </h4>
                                <div class="text-slate-800 leading-relaxed prose prose-sm max-w-none">
                                    {!! nl2br(e($laporanBimbingan->isi_laporan ?: '-')) !!}
                                </div>
                            </div>
                        </div>

                    </div>
                     {{-- ================= AKHIR MODIFIKASI ================= --}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>