<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Edit Data Siswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl border border-slate-200">
                <div class="p-8">
                    <div class="flex items-center justify-between mb-8">
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 uppercase tracking-wider">Form Edit Siswa</h3>
                            <p class="text-sm text-slate-500">Perbarui informasi siswa dan data akun orang tua di bawah
                                ini.</p>
                        </div>
                        <a href="{{ route('walikelas.siswa.index') }}"
                            class="text-sm font-semibold text-slate-600 hover:text-slate-800 flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            Kembali
                        </a>
                    </div>

                    <form action="{{ route('walikelas.siswa.update', $siswa->id) }}" method="POST" class="space-y-8">
                        @csrf
                        @method('PUT')

                        {{-- BAGIAN 1: DATA SISWA --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="col-span-2 pb-2 border-b border-slate-100">
                                <h4 class="text-sm font-bold text-teal-600 uppercase tracking-widest">I. Data Identitas
                                    Siswa</h4>
                            </div>

                            <div>
                                <x-input-label for="nama" :value="__('Nama Lengkap Siswa')" />
                                <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama"
                                    :value="old('nama', $siswa->nama)" required autofocus />
                                <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="nis" :value="__('Nomor Induk Siswa (NIS)')" />
                                <x-text-input id="nis" class="block mt-1 w-full" type="text" name="nis"
                                    :value="old('nis', $siswa->nis)" required />
                                <x-input-error :messages="$errors->get('nis')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="kelas" :value="__('Kelas')" />
                                <x-text-input id="kelas" class="block mt-1 w-full" type="text" name="kelas"
                                    :value="old('kelas', $siswa->kelas)" required />
                                <x-input-error :messages="$errors->get('kelas')" class="mt-2" />
                            </div>
                        </div>

                        {{-- BAGIAN 2: DATA WALI MURID --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="col-span-2 pb-2 border-b border-slate-100">
                                <h4 class="text-sm font-bold text-teal-600 uppercase tracking-widest">II. Data Wali
                                    Murid & Akun Sistem</h4>
                            </div>

                            <div>
                                <x-input-label for="nama_wali" :value="__('Nama Wali Murid')" />
                                <x-text-input id="nama_wali" class="block mt-1 w-full" type="text" name="nama_wali"
                                    :value="old('nama_wali', $siswa->waliMurid->nama)" required />
                                <x-input-error :messages="$errors->get('nama_wali')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="email_wali" :value="__('Email Wali (Username Login)')" />
                                <x-text-input id="email_wali" class="block mt-1 w-full" type="email" name="email_wali"
                                    :value="old('email_wali', $siswa->waliMurid->user->email)" required />
                                <x-input-error :messages="$errors->get('email_wali')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="nomor_telepon_wali" :value="__('Nomor WhatsApp Wali')" />
                                <x-text-input id="nomor_telepon_wali" class="block mt-1 w-full" type="text"
                                    name="nomor_telepon_wali" :value="old('nomor_telepon_wali', $siswa->waliMurid->nomor_telepon)" />
                                <x-input-error :messages="$errors->get('nomor_telepon_wali')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex justify-end pt-6 border-t border-slate-100 gap-4">
                            <x-secondary-button onclick="window.location.href='{{ route('walikelas.siswa.index') }}'">
                                {{ __('Batal') }}
                            </x-secondary-button>
                            <x-primary-button class="px-8 bg-teal-600 hover:bg-teal-700">
                                {{ __('Simpan Perubahan') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
