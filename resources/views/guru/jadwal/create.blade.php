<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Buat Jadwal Bimbingan Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <form action="{{ route('guru.jadwal-bimbingan.store') }}" method="POST">
                    @csrf
                    <div class="p-8 space-y-6">
                        <div class="border-b border-slate-200 pb-6">
                            <h3 class="text-lg font-medium leading-6 text-slate-900">Detail Jadwal</h3>
                            <p class="mt-1 text-sm text-slate-500">Jadwal akan berstatus "Menunggu Verifikasi" setelah dibuat.</p>
                        </div>

                        <div>
                            <x-input-label for="siswa_id" :value="__('Pilih Siswa')" />
                            <select id="siswa_id" name="siswa_id" class="mt-1 block w-full border-gray-300 focus:border-teal-500 focus:ring-teal-500 rounded-md shadow-sm" required>
                                <option value="">-- Pilih Siswa --</option>
                                @foreach($siswa as $s)
                                    <option value="{{ $s->id }}" {{ old('siswa_id') == $s->id ? 'selected' : '' }}>{{ $s->nama }} (Kelas: {{ $s->kelas }})</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('siswa_id')" />
                        </div>
                        
                        <div>
                            <x-input-label for="tanggal_jadwal" :value="__('Tanggal dan Waktu Bimbingan')" />
                            <x-text-input id="tanggal_jadwal" name="tanggal_jadwal" type="datetime-local" class="mt-1 block w-full" :value="old('tanggal_jadwal')" required />
                            <x-input-error class="mt-2" :messages="$errors->get('tanggal_jadwal')" />
                        </div>
                        
                        <input type="hidden" name="status" value="menunggu_verifikasi">
                    </div>

                    <div class="px-8 py-4 bg-slate-50 border-t border-slate-200 flex items-center gap-4">
                        <x-primary-button class="bg-teal-600 hover:bg-teal-500 focus:bg-teal-700 focus:ring-teal-500">
                            {{ __('Simpan Jadwal') }}
                        </x-primary-button>
                        <a href="{{ route('guru.jadwal-bimbingan.index') }}" class="text-sm text-slate-600 hover:text-slate-900">{{ __('Batal') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>