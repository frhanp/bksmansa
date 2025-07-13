<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Manajemen Pengguna Sistem') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-medium text-slate-900">Daftar Pengguna</h3>
                        <a href="{{ route('admin.pengguna.create') }}"
                            class="inline-flex items-center px-4 py-2 bg-teal-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-teal-500 focus:bg-teal-700 active:bg-teal-900 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Tambah Pengguna
                        </a>
                    </div>

                    @if (session('success'))
                        <div class="mb-4 p-4 bg-green-100 text-green-800 border border-green-300 rounded-lg">
                            {{ session('success') }}</div>
                    @endif
                    @if (session('error'))
                        <div class="mb-4 p-4 bg-red-100 text-red-800 border border-red-300 rounded-lg">
                            {{ session('error') }}</div>
                    @endif

                    <div class="overflow-x-auto border-t border-slate-200">
                        <table class="min-w-full divide-y divide-slate-200">
                            <thead class="bg-slate-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Nama
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Email
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Peran
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-200">
                                @foreach ($pengguna as $user)
                                    <tr>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900 text-left">
                                            {{ $user->name }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700 text-left">
                                            {{ $user->email }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700 text-left">
                                            {{ str_replace('_', ' ', Str::title($user->role)) }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-left">
                                            <a href="{{ route('admin.pengguna.edit', $user->id) }}"
                                                class="inline-block px-3 py-1 text-sm font-semibold text-teal-600 bg-teal-50 rounded-md hover:bg-teal-100 hover:text-teal-800 transition-colors duration-200">Edit</a>
                                            <form action="{{ route('admin.pengguna.destroy', $user->id) }}"
                                                method="POST" class="inline-block"
                                                onsubmit="return confirm('Yakin ingin menghapus pengguna ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="ml-2 px-3 py-1 text-sm font-semibold text-red-600 bg-red-50 rounded-md hover:bg-red-100 hover:text-red-800 transition-colors duration-200">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @if ($pengguna->hasPages())
                        <div class="p-4 border-t border-slate-200">
                            {{ $pengguna->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
