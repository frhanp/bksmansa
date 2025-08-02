<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Manajemen Data Siswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-medium text-slate-900">Daftar Siswa</h3>
                        <a href="{{ route('guru.siswa.create') }}" class="inline-flex items-center px-4 py-2 bg-teal-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-teal-500">
                            Tambah Siswa
                        </a>
                    </div>

                    <form id="filter-form" action="{{ route('guru.siswa.index') }}" method="GET" class="mb-6">
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                            <div class="md:col-span-2">
                                <x-input-label for="search" :value="__('Cari Nama / NIS')" />
                                <x-text-input id="search" type="text" name="search" class="w-full mt-1" :value="$request->search" placeholder="Tekan Enter untuk mencari..."/>
                            </div>
                            <div>
                                <x-input-label for="filter_kelas" :value="__('Filter Kelas')" />
                                <select name="filter_kelas" id="filter_kelas" class="filter-input w-full mt-1 border-slate-300 focus:border-teal-500 focus:ring-teal-500 rounded-md shadow-sm">
                                    <option value="">Semua Kelas</option>
                                    @foreach($kelasFilter as $kelas)
                                        <option value="{{ $kelas }}" @selected($request->filter_kelas == $kelas)>{{ $kelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <x-input-label for="filter_wali_kelas" :value="__('Filter Wali Kelas')" />
                                <select name="filter_wali_kelas" id="filter_wali_kelas" class="filter-input w-full mt-1 border-slate-300 focus:border-teal-500 focus:ring-teal-500 rounded-md shadow-sm">
                                    <option value="">Semua Wali Kelas</option>
                                    @foreach($waliKelasFilter as $wali)
                                        <option value="{{ $wali->id }}" @selected($request->filter_wali_kelas == $wali->id)>{{ $wali->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 mt-4">
                            {{-- Tombol Terapkan Filter sudah tidak diperlukan --}}
                            <a href="{{ route('guru.siswa.index') }}" class="text-sm text-slate-600 hover:text-slate-900">Reset Filter</a>
                        </div>
                    </form>

                    {{-- ... (sisa kode tabel tetap sama) ... --}}

                    <div class="overflow-x-auto border-t border-slate-200">
                        <table class="min-w-full divide-y divide-slate-200">
                            <thead class="bg-slate-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Nama Siswa</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">NIS</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Kelas</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Wali Kelas</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-200">
                                @forelse ($siswa as $item)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">{{ $item->nama }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">{{ $item->nis }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">{{ $item->kelas }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">{{ $item->waliKelas->nama }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="{{ route('guru.siswa.show', $item->id) }}" class="inline-block px-3 py-1 text-sm font-semibold text-blue-600 bg-blue-50 rounded-md hover:bg-blue-100">Detail</a>
                                            <a href="{{ route('guru.siswa.edit', $item->id) }}" class="ml-2 inline-block px-3 py-1 text-sm font-semibold text-teal-600 bg-teal-50 rounded-md hover:bg-teal-100">Edit</a>
                                            <form action="{{ route('guru.siswa.destroy', $item->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus data siswa ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="ml-2 px-3 py-1 text-sm font-semibold text-red-600 bg-red-50 rounded-md hover:bg-red-100">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-6 py-4 text-center text-slate-500">
                                            Tidak ada siswa yang cocok dengan kriteria filter.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                     @if ($siswa->hasPages())
                        <div class="p-4 border-t border-slate-200">
                            {{ $siswa->links() }}
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