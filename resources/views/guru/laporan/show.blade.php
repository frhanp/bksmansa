<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-slate-800">
            {{ __('Detail Laporan Bimbingan') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-xl overflow-hidden">
                <div class="p-8 space-y-8">
                    
                    {{-- Header --}}
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                        <div>
                            <h3 class="text-2xl font-semibold text-slate-900">
                                {{ $laporanBimbingan->jadwalBimbingan->siswa->nama }}
                            </h3>
                            <p class="text-sm text-slate-500 mt-1">
                                Dibuat oleh 
                                <span class="font-medium text-slate-700">{{ $laporanBimbingan->pembuat->name }}</span>
                                • {{ $laporanBimbingan->created_at->isoFormat('dddd, D MMMM YYYY') }}
                            </p>
                        </div>

                        @if ($laporanBimbingan->file_pendukung)
                            <a href="{{ Storage::url($laporanBimbingan->file_pendukung) }}" download
                               class="inline-flex items-center gap-2 px-5 py-2 rounded-lg bg-teal-600 text-white text-sm font-semibold shadow hover:bg-teal-500 focus:ring-2 focus:ring-teal-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V4"/>
                                </svg>
                                Unduh Dokumen
                            </a>
                        @endif
                    </div>

                    {{-- Konten --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-slate-50 rounded-lg p-5">
                            <h4 class="text-sm font-semibold text-slate-600 uppercase tracking-wide">Jenis Surat</h4>
                            <p class="mt-2 text-base font-medium text-slate-800">
                                {{ str_replace('_',' ',Str::title($laporanBimbingan->jenis_surat)) }}
                            </p>
                        </div>

                        <div class="bg-slate-50 rounded-lg p-5">
                            <h4 class="text-sm font-semibold text-slate-600 uppercase tracking-wide">Rencana Tindak Lanjut</h4>
                            <p class="mt-2 text-slate-800 leading-relaxed">
                                {!! nl2br(e($laporanBimbingan->rencana_tindak_lanjut ?: '-')) !!}
                            </p>
                        </div>
                    </div>

                    <div class="bg-slate-50 rounded-lg p-5">
                        <h4 class="text-sm font-semibold text-slate-600 uppercase tracking-wide">Isi Laporan Tambahan</h4>
                        <div class="mt-3 text-slate-800 leading-relaxed prose max-w-none">
                            {!! nl2br(e($laporanBimbingan->isi_laporan ?: '-')) !!}
                        </div>
                    </div>

                    <div class="pt-4">
                        <a href="{{ route('guru.jadwal-bimbingan.index') }}"
                           class="inline-block text-sm font-medium text-teal-600 hover:text-teal-800">
                            &larr; Kembali ke Daftar Jadwal
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
