<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Edit Catatan Pelanggaran') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                 <form action="{{ route('guru.pelanggaran-siswa.update', $pelanggaranSiswa->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="p-8 space-y-6">
                        <div class="border-b border-slate-200 pb-6">
                            <h3 class="text-lg font-medium leading-6 text-slate-900">Detail Kejadian</h3>
                        </div>
                        
                        <div>
                            <x-input-label for="siswa_id" :value="__('Siswa')" />
                            <select id="siswa_id" name="siswa_id" class="mt-1 block w-full border-gray-300 rounded-md" required>
                                @foreach($siswa as $s)
                                    <option value="{{ $s->id }}" @selected(old('siswa_id', $pelanggaranSiswa->siswa_id) == $s->id)>{{ $s->nama }} (Kelas: {{ $s->kelas }})</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('siswa_id')" />
                        </div>
                        
                        <div>
                            <x-input-label for="jenis_pelanggaran_id" :value="__('Jenis Pelanggaran')" />
                            <select id="jenis_pelanggaran_id" name="jenis_pelanggaran_id" class="mt-1 block w-full border-gray-300 rounded-md" required>
                                @foreach($jenisPelanggaran as $jp)
                                    <option value="{{ $jp->id }}" @selected(old('jenis_pelanggaran_id', $pelanggaranSiswa->jenis_pelanggaran_id) == $jp->id)>{{ $jp->nama_pelanggaran }} ({{$jp->poin}} Poin)</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('jenis_pelanggaran_id')" />
                        </div>

                        <div>
                            <x-input-label for="catatan" :value="__('Catatan Tambahan (Opsional)')" />
                            <textarea id="catatan" name="catatan" rows="4" class="mt-1 block w-full border-gray-300 rounded-md">{{ old('catatan', $pelanggaranSiswa->catatan) }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('catatan')" />
                        </div>

                        {{-- INPUT & PREVIEW BUKTI PELANGGARAN --}}
                        <div class="border-t border-slate-100 pt-6">
                            <x-input-label for="bukti_pelanggaran" :value="__('Upload Bukti Baru (Maks 2MB, Opsional)')" />
                            
                            @if($pelanggaranSiswa->bukti_pelanggaran)
                                <div class="mb-3 mt-2 p-3 bg-slate-50 border border-slate-200 rounded-lg flex items-center justify-between">
                                    <span class="text-sm text-slate-600">Bukti Tersimpan:</span>
                                    <a href="{{ Storage::url($pelanggaranSiswa->bukti_pelanggaran) }}" target="_blank" class="text-sm font-semibold text-teal-600 hover:text-teal-800 underline">Lihat File</a>
                                </div>
                            @endif

                            <input id="bukti_pelanggaran" type="file" name="bukti_pelanggaran" class="mt-1 block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-teal-50 file:text-teal-700 hover:file:bg-teal-100 transition-colors" accept=".jpg,.jpeg,.png,.pdf" />
                            <p class="mt-1 text-xs text-slate-400">Kosongkan jika tidak ingin mengubah bukti saat ini.</p>
                            <x-input-error class="mt-2" :messages="$errors->get('bukti_pelanggaran')" />
                        </div>
                    </div>

                    <div class="px-8 py-4 bg-slate-50 border-t border-slate-200 flex items-center gap-4">
                        <x-primary-button class="bg-teal-600 hover:bg-teal-500 focus:bg-teal-700 focus:ring-teal-500">
                            {{ __('Update Catatan') }}
                        </x-primary-button>
                        <a href="{{ route('guru.pelanggaran-siswa.index') }}" class="text-sm text-slate-600 hover:text-slate-900">{{ __('Batal') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>