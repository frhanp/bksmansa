<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Edit Laporan Bimbingan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <form action="{{ route('guru.laporan.update', $laporanBimbingan->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="p-8 space-y-6">
                        <div class="border-b border-slate-200 pb-6">
                            <h3 class="text-lg font-medium leading-6 text-slate-900">Detail Sesi Konseling</h3>
                            <div class="mt-2 text-sm text-slate-600 space-y-1">
                                <p><span class="font-semibold">Siswa:</span> {{ $laporanBimbingan->jadwalBimbingan->siswa->nama }}</p>
                                <p><span class="font-semibold">Tanggal:</span> {{ \Carbon\Carbon::parse($laporanBimbingan->jadwalBimbingan->tanggal_jadwal)->isoFormat('dddd, D MMMM YYYY') }}</p>
                            </div>
                        </div>
                        
                        <div>
                            <x-input-label for="isi_laporan" :value="__('Isi Laporan / Hasil Konseling')" />
                            <textarea id="isi_laporan" name="isi_laporan" rows="8" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>{{ old('isi_laporan', $laporanBimbingan->isi_laporan) }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('isi_laporan')" />
                        </div>
                        
                        <div>
                            <x-input-label for="rencana_tindak_lanjut" :value="__('Rencana Tindak Lanjut (Opsional)')" />
                            <textarea id="rencana_tindak_lanjut" name="rencana_tindak_lanjut" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('rencana_tindak_lanjut', $laporanBimbingan->rencana_tindak_lanjut) }}</textarea>
                        </div>
                    </div>

                    <div class="px-8 py-4 bg-slate-50 border-t border-slate-200 flex items-center gap-4">
                        <x-primary-button class="bg-teal-600 hover:bg-teal-500 focus:bg-teal-700 focus:ring-teal-500">
                            {{ __('Update Laporan') }}
                        </x-primary-button>
                        <a href="{{ route('guru.laporan.show', $laporanBimbingan->id) }}" class="text-sm text-slate-600 hover:text-slate-900">{{ __('Batal') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>