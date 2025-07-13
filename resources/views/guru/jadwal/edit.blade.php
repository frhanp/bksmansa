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
                        </div>

                        <div>
                            <x-input-label for="siswa_id" :value="__('Siswa')" />
                            <select id="siswa_id" name="siswa_id" class="mt-1 block w-full border-gray-300 rounded-md" required>
                                @foreach($siswa as $s)
                                    <option value="{{ $s->id }}" @selected(old('siswa_id', $jadwalBimbingan->siswa_id) == $s->id)>{{ $s->nama }} (Kelas: {{ $s->kelas }})</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('siswa_id')" />
                        </div>
                        
                        <div>
                            <x-input-label for="tanggal_jadwal" :value="__('Tanggal dan Waktu Bimbingan')" />
                            <x-text-input id="tanggal_jadwal" name="tanggal_jadwal" type="datetime-local" class="mt-1 block w-full" :value="old('tanggal_jadwal', \Carbon\Carbon::parse($jadwalBimbingan->tanggal_jadwal)->format('Y-m-d\TH:i'))" required />
                            <x-input-error class="mt-2" :messages="$errors->get('tanggal_jadwal')" />
                        </div>

                        <div>
                            <x-input-label for="status" :value="__('Status Jadwal')" />
                            <select id="status" name="status" class="mt-1 block w-full border-gray-300 rounded-md" required>
                                <option value="menunggu_verifikasi" @selected($jadwalBimbingan->status == 'menunggu_verifikasi')>Menunggu Verifikasi</option>
                                <option value="terverifikasi" @selected($jadwalBimbingan->status == 'terverifikasi')>Terverifikasi</option>
                                <option value="selesai" @selected($jadwalBimbingan->status == 'selesai')>Selesai</option>
                                <option value="dibatalkan" @selected($jadwalBimbingan->status == 'dibatalkan')>Dibatalkan</option>
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