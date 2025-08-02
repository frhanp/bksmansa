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
                        <a href="{{ route('admin.jenis-pelanggaran.create') }}" class="inline-flex items-center px-4 py-2 bg-teal-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-teal-500">
                            Tambah Data
                        </a>
                    </div>

                    <form id="filter-form" action="{{ route('admin.jenis-pelanggaran.index') }}" method="GET" class="mb-6">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="md:col-span-2">
                                <x-input-label for="search" :value="__('Cari Nama Pelanggaran')" />
                                <x-text-input id="search" type="text" name="search" class="w-full mt-1" :value="$request->search" placeholder="Tekan Enter untuk mencari..."/>
                            </div>
                            <div>
                                <x-input-label for="filter_poin" :value="__('Filter Kategori Poin')" />
                                <select name="filter_poin" id="filter_poin" class="filter-input w-full mt-1 border-slate-300 focus:border-teal-500 focus:ring-teal-500 rounded-md shadow-sm">
                                    <option value="">Semua Kategori</option>
                                    <option value="ringan" @selected($request->filter_poin == 'ringan')>Ringan (1-25 Poin)</option>
                                    <option value="sedang" @selected($request->filter_poin == 'sedang')>Sedang (26-75 Poin)</option>
                                    <option value="berat" @selected($request->filter_poin == 'berat')>Berat (>75 Poin)</option>
                                </select>
                            </div>
                        </div>
                         <div class="flex items-center gap-4 mt-4">
                            <a href="{{ route('admin.jenis-pelanggaran.index') }}" class="text-sm text-slate-600 hover:text-slate-900">Reset Filter</a>
                        </div>
                    </form>

                    @if (session('success'))
                        <div class="mb-4 p-4 bg-green-100 text-green-800 border border-green-300 rounded-lg">{{ session('success') }}</div>
                    @endif

                    <div class="overflow-x-auto border-t border-slate-200">
                        <table class="min-w-full divide-y divide-slate-200">
                            <thead class="bg-slate-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">No</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Nama Pelanggaran</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Poin</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-200">
                                @forelse ($pelanggaran as $item)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">{{ $loop->iteration + $pelanggaran->firstItem() - 1 }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-900 font-medium">{{ $item->nama_pelanggaran }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-bold {{ $item->poin > 75 ? 'text-red-600' : ($item->poin > 25 ? 'text-amber-600' : 'text-slate-800') }}">
                                            {{ $item->poin }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="{{ route('admin.jenis-pelanggaran.edit', $item->id) }}" class="inline-block px-3 py-1 text-sm font-semibold text-teal-600 bg-teal-50 rounded-md hover:bg-teal-100">Edit</a>
                                            <form action="{{ route('admin.jenis-pelanggaran.destroy', $item->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="ml-2 px-3 py-1 text-sm font-semibold text-red-600 bg-red-50 rounded-md hover:bg-red-100">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-4 text-center text-slate-500">Tidak ada data yang cocok dengan filter.</td>
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

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('filter-form');
            const filters = form.querySelectorAll('.filter-input');

            filters.forEach(function (element) {
                element.addEventListener('change', function () {
                    form.submit();
                });
            });
        });
    </script>
    @endpush
</x-app-layout>