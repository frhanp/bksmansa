<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Edit Data Siswa: ') . $siswa->nama }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <form action="{{ route('guru.siswa.update', $siswa->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="p-8 space-y-6">
                        <div class="border-b border-slate-200 pb-6">
                            <h3 class="text-lg font-medium text-slate-900">Informasi Siswa</h3>
                        </div>
                        
                        <div>
                            <x-input-label for="nama" :value="__('Nama Lengkap Siswa')" />
                            <x-text-input id="nama" name="nama" type="text" class="mt-1 block w-full" :value="old('nama', $siswa->nama)" required />
                        </div>
                        <div>
                            <x-input-label for="nis" :value="__('NIS (Nomor Induk Siswa)')" />
                            <x-text-input id="nis" name="nis" type="text" class="mt-1 block w-full" :value="old('nis', $siswa->nis)" required />
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                             <div>
                                <x-input-label for="kelas" :value="__('Kelas')" />
                                <x-text-input id="kelas" name="kelas" type="text" class="mt-1 block w-full" :value="old('kelas', $siswa->kelas)" required />
                            </div>
                            <div>
                                <x-input-label for="wali_kelas_id" :value="__('Wali Kelas')" />
                                <select id="wali_kelas_id" name="wali_kelas_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                                    @foreach($waliKelasList as $user)
                                        <option value="{{ $user->guru->id }}" @selected(old('wali_kelas_id', $siswa->wali_kelas_id) == $user->guru->id)>{{ $user->guru->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-8 space-y-6 border-t border-slate-200">
                         <div class="border-b border-slate-200 pb-6">
                            <h3 class="text-lg font-medium text-slate-900">Informasi & Akun Wali Murid</h3>
                        </div>
                         <div>
                            <x-input-label for="nama_wali" :value="__('Nama Lengkap Wali')" />
                            <x-text-input id="nama_wali" name="nama_wali" type="text" class="mt-1 block w-full" :value="old('nama_wali', $siswa->waliMurid->nama)" required />
                        </div>
                        <div>
                            <x-input-label for="email_wali" :value="__('Email Wali (untuk login)')" />
                            <x-text-input id="email_wali" name="email_wali" type="email" class="mt-1 block w-full" :value="old('email_wali', $siswa->waliMurid->user->email)" required />
                        </div>
                        <div>
                            <x-input-label for="nomor_telepon_wali" :value="__('Nomor Telepon Wali (Opsional)')" />
                            <x-text-input id="nomor_telepon_wali" name="nomor_telepon_wali" type="text" class="mt-1 block w-full" :value="old('nomor_telepon_wali', $siswa->waliMurid->nomor_telepon)" />
                        </div>
                        <div class="mt-6 border-t border-slate-200 pt-6">
                            <p class="text-sm text-slate-500 mb-4">Kosongkan password jika tidak ingin mengubahnya.</p>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div>
                                    <x-input-label for="password" :value="__('Password Baru Wali')" />
                                    <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" />
                                    <x-input-error class="mt-2" :messages="$errors->get('password')" />
                                </div>
                                <div>
                                    <x-input-label for="password_confirmation" :value="__('Konfirmasi Password Baru')" />
                                    <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="px-8 py-4 bg-slate-50 border-t border-slate-200 flex items-center gap-4">
                        <x-primary-button class="bg-teal-600 hover:bg-teal-500 focus:bg-teal-700 focus:ring-teal-500">
                            {{ __('Update Data Siswa') }}
                        </x-primary-button>
                        <a href="{{ route('guru.siswa.index') }}" class="text-sm text-slate-600 hover:text-slate-900">{{ __('Batal') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>