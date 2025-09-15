<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Edit Jadwal Bimbingan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <form action="{{ route('guru.jadwal-bimbingan.update', $jadwalBimbingan->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="p-8 space-y-6">
                        <div class="border-b border-slate-200 pb-6">
                            <h3 class="text-lg font-medium leading-6 text-slate-900">Detail Jadwal</h3>
                            <p class="mt-1 text-sm text-slate-500">
                                Harap diperhatikan: Anda hanya dapat mengubah status menjadi "Selesai" atau "Dibatalkan".
                            </p>
                        </div>

                        <div>
                            <x-input-label for="siswa_id" :value="__('Siswa (Tidak dapat diubah)')" />
                            <x-text-input id="siswa_id" name="siswa_id_disabled" type="text" class="mt-1 block w-full bg-slate-100" :value="$jadwalBimbingan->siswa->nama . ' (Kelas: ' . $jadwalBimbingan->siswa->kelas . ')'" disabled />
                            <input type="hidden" name="siswa_id" value="{{ $jadwalBimbingan->siswa_id }}">
                        </div>
                        
                        <div>
                            <x-input-label for="tanggal_jadwal" :value="__('Tanggal dan Waktu Bimbingan')" />
                            <x-text-input id="tanggal_jadwal" name="tanggal_jadwal" type="datetime-local" class="mt-1 block w-full" :value="old('tanggal_jadwal', \Carbon\Carbon::parse($jadwalBimbingan->tanggal_jadwal)->format('Y-m-d\TH:i'))" required />
                            <x-input-error class="mt-2" :messages="$errors->get('tanggal_jadwal')" />
                        </div>

                        {{-- PERBAIKAN: Dropdown status yang sudah dibatasi --}}
                        <div>
                            <x-input-label for="status" :value="__('Ubah Status Jadwal')" />
                            <select id="status" name="status" class="mt-1 block w-full border-gray-300 rounded-md" required>
                                {{-- Menampilkan status saat ini jika bukan pilihan default --}}
                                @if(!in_array($jadwalBimbingan->status, ['selesai', 'dibatalkan']))
                                    <option value="{{ $jadwalBimbingan->status }}" selected disabled>
                                        {{ str_replace('_', ' ', Str::title($jadwalBimbingan->status)) }} (Status Saat Ini)
                                    </option>
                                @endif
                                
                                {{-- Loop untuk status yang diizinkan dari controller --}}
                                @foreach($statuses as $value => $label)
                                    <option value="{{ $value }}" @selected(old('status', $jadwalBimbingan->status) == $value)>
                                        {{ $label }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('status')" />
                        </div>
                    </div>

                    <div class="px-8 py-4 bg-slate-50 border-t border-slate-200 flex items-center gap-4">
                        <x-primary-button class="bg-teal-600 hover:bg-teal-500 focus:bg-teal-700 focus:ring-teal-500">
                            {{ __('Update Jadwal') }}
                        </x-primary-button>
                        <a href="{{ route('guru.jadwal-bimbingan.index') }}" class="text-sm text-slate-600 hover:text-slate-900">{{ __('Batal') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>