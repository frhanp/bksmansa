<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Manajemen Jenis Pelanggaran') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-medium text-slate-900">Daftar Pelanggaran</h3>
                        <a href="{{ route('admin.jenis-pelanggaran.create') }}"
                            class="inline-flex items-center px-4 py-2 bg-teal-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-teal-500 focus:bg-teal-700 active:bg-teal-900 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Tambah Data
                        </a>
                    </div>

                    @if (session('success'))
                        <div class="mb-4 p-4 bg-green-100 text-green-800 border border-green-300 rounded-lg">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="overflow-x-auto border-t border-slate-200">
                        <table class="min-w-full divide-y divide-slate-200">
                            <thead class="bg-slate-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                                        No</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                                        Nama Pelanggaran</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                                        Poin</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                                        Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-200">
                                @forelse ($pelanggaran as $item)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500 text-left">
                                            {{ $loop->iteration + $pelanggaran->firstItem() - 1 }}</td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-slate-900 font-medium text-left">
                                            {{ $item->nama_pelanggaran }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700 text-left">
                                            {{ $item->poin }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-left">
                                            <a href="{{ route('admin.jenis-pelanggaran.edit', $item->id) }}"
                                                class="inline-block px-3 py-1 text-sm font-semibold text-teal-600 bg-teal-50 rounded-md hover:bg-teal-100 hover:text-teal-800 transition-colors duration-200">Edit</a>
                                            <form action="{{ route('admin.jenis-pelanggaran.destroy', $item->id) }}"
                                                method="POST" class="inline-block"
                                                onsubmit="return confirm('Apakah Anda yakin?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="ml-2 px-3 py-1 text-sm font-semibold text-red-600 bg-red-50 rounded-md hover:bg-red-100 hover:text-red-800 transition-colors duration-200">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4"
                                            class="px-6 py-4 whitespace-nowrap text-center text-slate-500">Data belum
                                            tersedia.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    @if ($pelanggaran->hasPages())
                        <div class="p-4 border-t border-slate-200">
                            {{ $pelanggaran->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
