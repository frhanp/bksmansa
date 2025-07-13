<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Tambah Data Siswa Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <form action="{{ route('guru.siswa.store') }}" method="POST">
                    @csrf
                    <div class="p-8 space-y-6">
                        <div class="border-b border-slate-200 pb-6">
                            <h3 class="text-lg font-medium leading-6 text-slate-900">Informasi Siswa</h3>
                            <p class="mt-1 text-sm text-slate-500">Masukkan detail data diri siswa.</p>
                        </div>
                        
                        <div>
                            <x-input-label for="nama" :value="__('Nama Lengkap Siswa')" />
                            <x-text-input id="nama" name="nama" type="text" class="mt-1 block w-full" :value="old('nama')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('nama')" />
                        </div>
                        <div>
                            <x-input-label for="nis" :value="__('NIS (Nomor Induk Siswa)')" />
                            <x-text-input id="nis" name="nis" type="text" class="mt-1 block w-full" :value="old('nis')" required />
                            <x-input-error class="mt-2" :messages="$errors->get('nis')" />
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                             <div>
                                <x-input-label for="kelas" :value="__('Kelas')" />
                                <x-text-input id="kelas" name="kelas" type="text" class="mt-1 block w-full" :value="old('kelas')" required placeholder="Contoh: XII IPA 1" />
                                <x-input-error class="mt-2" :messages="$errors->get('kelas')" />
                            </div>
                            <div>
                                <x-input-label for="wali_kelas_id" :value="__('Pilih Wali Kelas')" />
                                <select id="wali_kelas_id" name="wali_kelas_id" class="mt-1 block w-full border-gray-300 focus:border-teal-500 focus:ring-teal-500 rounded-md shadow-sm" required>
                                    <option value="">-- Pilih Wali --</option>
                                    @foreach($waliKelasList as $user)
                                        <option value="{{ $user->guru->id }}" {{ old('wali_kelas_id') == $user->guru->id ? 'selected' : '' }}>{{ $user->guru->nama }}</option>
                                    @endforeach
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('wali_kelas_id')" />
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-8 space-y-6 border-t border-slate-200">
                         <div class="border-b border-slate-200 pb-6">
                            <h3 class="text-lg font-medium leading-6 text-slate-900">Informasi & Akun Wali Murid</h3>
                            <p class="mt-1 text-sm text-slate-500">Data ini akan digunakan untuk membuat akun login bagi wali murid.</p>
                        </div>
                         <div>
                            <x-input-label for="nama_wali" :value="__('Nama Lengkap Wali')" />
                            <x-text-input id="nama_wali" name="nama_wali" type="text" class="mt-1 block w-full" :value="old('nama_wali')" required />
                            <x-input-error class="mt-2" :messages="$errors->get('nama_wali')" />
                        </div>
                        <div>
                            <x-input-label for="email_wali" :value="__('Email Wali (untuk login)')" />
                            <x-text-input id="email_wali" name="email_wali" type="email" class="mt-1 block w-full" :value="old('email_wali')" required />
                            <x-input-error class="mt-2" :messages="$errors->get('email_wali')" />
                        </div>
                        <div>
                            <x-input-label for="nomor_telepon_wali" :value="__('Nomor Telepon Wali (Opsional)')" />
                            <x-text-input id="nomor_telepon_wali" name="nomor_telepon_wali" type="text" class="mt-1 block w-full" :value="old('nomor_telepon_wali')" />
                            <x-input-error class="mt-2" :messages="$errors->get('nomor_telepon_wali')" />
                        </div>
                        <p class="text-xs text-slate-500">Password default untuk akun wali murid adalah "password". Wali murid dapat mengubahnya nanti.</p>
                    </div>

                    <div class="px-8 py-4 bg-slate-50 border-t border-slate-200 flex items-center gap-4">
                        <x-primary-button class="bg-teal-600 hover:bg-teal-500 focus:bg-teal-700 focus:ring-teal-500">
                            {{ __('Simpan Data Siswa') }}
                        </x-primary-button>
                        <a href="{{ route('guru.siswa.index') }}" class="text-sm text-slate-600 hover:text-slate-900">{{ __('Batal') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>