<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Tambah Siswa Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl border border-slate-200">
                <div class="p-8">
                    <div class="flex items-center justify-between mb-8">
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 uppercase tracking-wider">Form Registrasi Siswa
                            </h3>
                            <p class="text-sm text-slate-500">Silakan lengkapi data siswa dan data wali murid di bawah
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

                    <form action="{{ route('walikelas.siswa.store') }}" method="POST" class="space-y-8">
                        @csrf

                        {{-- BAGIAN 1: DATA SISWA --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="col-span-2 pb-2 border-b border-slate-100">
                                <h4 class="text-sm font-bold text-teal-600 uppercase tracking-widest">I. Data Identitas
                                    Siswa</h4>
                            </div>

                            <div>
                                <x-input-label for="nama" :value="__('Nama Lengkap Siswa')" />
                                <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama"
                                    :value="old('nama')" required autofocus placeholder="Masukkan nama lengkap siswa" />
                                <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="nis" :value="__('Nomor Induk Siswa (NIS)')" />
                                <x-text-input id="nis" class="block mt-1 w-full" type="text" name="nis"
                                    :value="old('nis')" required placeholder="Masukkan NIS" />
                                <x-input-error :messages="$errors->get('nis')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="kelas" :value="__('Kelas')" />
                                <x-text-input id="kelas" class="block mt-1 w-full" type="text" name="kelas"
                                    :value="old('kelas')" required placeholder="Contoh: X MIPA 1" />
                                <x-input-error :messages="$errors->get('kelas')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="tempat_lahir" :value="__('Tempat Lahir')" />
                                <x-text-input id="tempat_lahir" class="block mt-1 w-full" type="text" name="tempat_lahir"
                                    :value="old('tempat_lahir')" required placeholder="Masukkan tempat lahir" />
                                <x-input-error :messages="$errors->get('tempat_lahir')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="tanggal_lahir" :value="__('Tanggal Lahir')" />
                                <x-text-input id="tanggal_lahir" class="block mt-1 w-full" type="date" name="tanggal_lahir"
                                    :value="old('tanggal_lahir')" required placeholder="Masukkan tanggal lahir" />
                                <x-input-error :messages="$errors->get('tanggal_lahir')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="jenis_kelamin" :value="__('Jenis Kelamin')" />
                                <select id="jenis_kelamin" class="block mt-1 w-full" name="jenis_kelamin"
                                    :value="old('jenis_kelamin')" required>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <x-input-error :messages="$errors->get('jenis_kelamin')" class="mt-2" />
                            </div>
                        </div>

                        {{-- BAGIAN 2: DATA WALI MURID --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="col-span-2 pb-2 border-b border-slate-100">
                                <h4 class="text-sm font-bold text-teal-600 uppercase tracking-widest">II. Data Wali
                                    Murid & Akun Sistem</h4>
                                <p class="text-[11px] text-slate-400 mt-1 italic">*Data ini akan digunakan otomatis
                                    sebagai akun login orang tua.</p>
                            </div>

                            <div>
                                <x-input-label for="nama_wali" :value="__('Nama Wali Murid')" />
                                <x-text-input id="nama_wali" class="block mt-1 w-full" type="text" name="nama_wali"
                                    :value="old('nama_wali')" required placeholder="Masukkan nama orang tua/wali" />
                                <x-input-error :messages="$errors->get('nama_wali')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="email_wali" :value="__('Email Wali (Untuk Login)')" />
                                <x-text-input id="email_wali" class="block mt-1 w-full" type="email" name="email_wali"
                                    :value="old('email_wali')" required placeholder="Contoh: wali@email.com" />
                                <x-input-error :messages="$errors->get('email_wali')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="nomor_telepon_wali" :value="__('Nomor WhatsApp Wali')" />
                                <x-text-input id="nomor_telepon_wali" class="block mt-1 w-full" type="text"
                                    name="nomor_telepon_wali" :value="old('nomor_telepon_wali')" placeholder="Contoh: 08123456789" />
                                <x-input-error :messages="$errors->get('nomor_telepon_wali')" class="mt-2" />
                            </div>

                            <div class="bg-slate-50 p-4 rounded-lg border border-slate-100 flex items-start gap-3">
                                <svg class="w-5 h-5 text-slate-400 mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <p class="text-xs text-slate-500 leading-relaxed">
                                    <strong>Catatan:</strong> Password default untuk akun orang tua adalah <span
                                        class="font-mono font-bold text-slate-700 underline">password</span>. Silakan
                                    informasikan kepada orang tua untuk segera mengganti password setelah login pertama
                                    kali.
                                </p>
                            </div>
                        </div>

                        <div class="flex justify-end pt-6 border-t border-slate-100">
                            <x-primary-button class="px-8 py-3 bg-teal-600 hover:bg-teal-700">
                                {{ __('Simpan Data Siswa') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
