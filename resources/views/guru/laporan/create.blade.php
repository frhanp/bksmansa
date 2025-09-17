<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Buat Laporan Bimbingan untuk ' . $jadwal->siswa->nama) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <form action="{{ route('guru.laporan.store', $jadwal->id) }}" method="POST">
                    @csrf
                    <div class="p-8 space-y-6">
                        <div class="border-b border-slate-200 pb-6">
                            <h3 class="text-lg font-medium leading-6 text-slate-900">Detail Laporan</h3>
                            <p class="mt-1 text-sm text-slate-500">Pilih jenis surat yang akan dibuat. Data siswa akan otomatis terisi.</p>
                        </div>

                        {{-- Dropdown untuk memilih jenis surat --}}
                        <div>
                            <x-input-label for="jenis_surat" :value="__('Pilih Jenis Surat/Laporan')" />
                            <select id="jenis_surat" name="jenis_surat" class="mt-1 block w-full border-gray-300 rounded-md" required>
                                <option value="">-- Pilih Template --</option>
                                @foreach($templateSurat as $key => $label)
                                    <option value="{{ $key }}" {{ old('jenis_surat') == $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('jenis_surat')" />
                        </div>

                        {{-- Textarea untuk input tambahan --}}
                        <div>
                            <x-input-label for="isi_laporan" :value="__('Isi Laporan Tambahan (Opsional)')" />
                            <textarea id="isi_laporan" name="isi_laporan" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('isi_laporan') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('isi_laporan')" />
                        </div>
                        
                        <div>
                            <x-input-label for="rencana_tindak_lanjut" :value="__('Rencana Tindak Lanjut (Opsional)')" />
                            <textarea id="rencana_tindak_lanjut" name="rencana_tindak_lanjut" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('rencana_tindak_lanjut') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('rencana_tindak_lanjut')" />
                        </div>
                    </div>

                    <div class="px-8 py-4 bg-slate-50 border-t border-slate-200 flex items-center gap-4">
                        <x-primary-button class="bg-teal-600 hover:bg-teal-500 focus:bg-teal-700 focus:ring-teal-500">
                            {{ __('Simpan & Buat Surat') }}
                        </x-primary-button>
                        <a href="{{ route('guru.jadwal-bimbingan.index') }}" class="text-sm text-slate-600 hover:text-slate-900">{{ __('Batal') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>