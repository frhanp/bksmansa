<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Edit Pengguna: ') . $pengguna->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-8">
                    <form action="{{ route('admin.pengguna.update', $pengguna->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="space-y-6">
                            <div>
                                <x-input-label for="name" :value="__('Nama Pengguna')" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                                    :value="old('name', $pengguna->name)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>

                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                                    :value="old('email', $pengguna->email)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                            </div>

                            <div>
                                <x-input-label for="role" :value="__('Peran (Role)')" />
                                <select id="role" name="role"
                                    class="block mt-1 w-full border-gray-300 focus:border-teal-500 focus:ring-teal-500 rounded-md shadow-sm"
                                    required>
                                    <option value="guru_bk" @selected($pengguna->role == 'guru_bk')>Guru BK</option>
                                    <option value="wali_kelas" @selected($pengguna->role == 'wali_kelas')>Wali Kelas</option>
                                    <option value="kepala_sekolah" @selected($pengguna->role == 'kepala_sekolah')>Kepala Sekolah</option>
                                    <option value="admin_bk" @selected($pengguna->role == 'admin_bk')>Admin BK</option>
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('role')" />
                            </div>

                            <div class="mt-4">
                                <p class="text-sm text-slate-500">Kosongkan password jika tidak ingin mengubahnya.</p>
                            </div>

                            <div>
                                <x-input-label for="password" :value="__('Password Baru')" />
                                <x-text-input id="password" name="password" type="password"
                                    class="mt-1 block w-full" />
                                <x-input-error class="mt-2" :messages="$errors->get('password')" />
                            </div>

                            <div>
                                <x-input-label for="password_confirmation" :value="__('Konfirmasi Password Baru')" />
                                <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                                    class="mt-1 block w-full" />
                            </div>

                            <div class="flex items-center gap-4 border-t border-slate-200 pt-6">
                                <x-primary-button
                                    class="bg-teal-600 hover:bg-teal-500 focus:bg-teal-700 focus:ring-teal-500">
                                    {{ __('Update Pengguna') }}
                                </x-primary-button>
                                <a href="{{ route('admin.pengguna.index') }}"
                                    class="text-sm text-slate-600 hover:text-slate-900">{{ __('Batal') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
