<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Detail Laporan Bimbingan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
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
                 <div class="px-8 py-4 bg-slate-50 border-t border-slate-200 flex justify-between items-center">
                    <a href="{{ route('walikelas.siswa.show', $laporanBimbingan->jadwalBimbingan->siswa->id) }}" class="text-sm font-semibold text-teal-600 hover:text-teal-800">&larr; Kembali ke Detail Siswa</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>