<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Detail Laporan Bimbingan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                {{-- --- AWAL KONTEN YANG DISALIN --- --}}
                <div class="p-8 space-y-6">
                    <div class="border-b border-slate-200 pb-6">
                        <h3 class="text-lg font-medium leading-6 text-slate-900">Laporan Sesi Konseling</h3>
                        <div class="mt-2 text-sm text-slate-600 space-y-1">
                            <p><span class="font-semibold">Siswa:</span> {{ $laporanBimbingan->jadwalBimbingan->siswa->nama }}</p>
                            <p><span class="font-semibold">Tanggal Sesi:</span> {{ \Carbon\Carbon::parse($laporanBimbingan->jadwalBimbingan->tanggal_jadwal)->isoFormat('dddd, D MMMM YYYY') }}</p>
                            <p><span class="font-semibold">Konselor:</span> {{ $laporanBimbingan->dibuatOleh->name }}</p>
                        </div>
                    </div>

                    <div>
                        <h4 class="font-semibold text-slate-800">Isi Laporan / Hasil Konseling</h4>
                        <div class="mt-2 p-4 bg-slate-50 rounded-lg text-slate-700 prose max-w-none">
                            {!! nl2br(e($laporanBimbingan->isi_laporan)) !!}
                        </div>
                    </div>

                    @if($laporanBimbingan->rencana_tindak_lanjut)
                    <div>
                        <h4 class="font-semibold text-slate-800">Rencana Tindak Lanjut</h4>
                        <div class="mt-2 p-4 bg-slate-50 rounded-lg text-slate-700 prose max-w-none">
                           {!! nl2br(e($laporanBimbingan->rencana_tindak_lanjut)) !!}
                        </div>
                    </div>
                    @endif
                </div>
                {{-- --- AKHIR KONTEN YANG DISALIN --- --}}

                <div class="px-8 py-4 bg-slate-50 border-t border-slate-200 flex justify-between items-center">
                    {{-- Ubah link kembali ini --}}
                    <a href="{{ route('ortu.dashboard') }}" class="text-sm font-semibold text-teal-600 hover:text-teal-800">&larr; Kembali ke Dasbor</a>
                    
                    {{-- Tombol download juga berguna di sini --}}
                    <a href="{{ route('guru.laporan.download', $laporanBimbingan->id) }}" class="inline-flex items-center px-4 py-2 bg-teal-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-teal-500">
                        Download PDF
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>