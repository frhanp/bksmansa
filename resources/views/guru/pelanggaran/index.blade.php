<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Riwayat Pelanggaran Siswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-medium text-slate-900">Data Pelanggaran Tercatat</h3>
                        <a href="{{ route('guru.pelanggaran-siswa.create') }}" class="inline-flex items-center px-4 py-2 bg-teal-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-teal-500">
                            Catat Pelanggaran
                        </a>
                    </div>

                    <form id="filter-form" action="{{ route('guru.pelanggaran-siswa.index') }}" method="GET" class="mb-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                            <div>
                                <x-input-label for="search" :value="__('Cari Nama Siswa')" />
                                <x-text-input id="search" type="text" name="search" class="w-full mt-1" :value="$request->search" placeholder="Tekan Enter..."/>
                            </div>
                            <div>
                                <x-input-label for="filter_kelas" :value="__('Filter Kelas')" />
                                <select name="filter_kelas" id="filter_kelas" class="filter-input w-full mt-1 border-slate-300 rounded-md shadow-sm">
                                    <option value="">Semua Kelas</option>
                                    @foreach($kelasFilter as $kelas)
                                        <option value="{{ $kelas }}" @selected($request->filter_kelas == $kelas)>{{ $kelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                             <div>
                                <x-input-label for="filter_jenis_pelanggaran" :value="__('Filter Pelanggaran')" />
                                <select name="filter_jenis_pelanggaran" id="filter_jenis_pelanggaran" class="filter-input w-full mt-1 border-slate-300 rounded-md shadow-sm">
                                    <option value="">Semua Jenis</option>
                                    @foreach($jenisPelanggaranFilter as $jp)
                                        <option value="{{ $jp->id }}" @selected($request->filter_jenis_pelanggaran == $jp->id)>{{ $jp->nama_pelanggaran }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <x-input-label for="filter_siswa" :value="__('Filter Siswa Tertentu')" />
                                <select name="filter_siswa" id="filter_siswa" class="filter-input w-full mt-1 border-slate-300 rounded-md shadow-sm">
                                    <option value="">Semua Siswa</option>
                                    @foreach($siswaFilter as $siswa)
                                        <option value="{{ $siswa->id }}" @selected($request->filter_siswa == $siswa->id)>{{ $siswa->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-4">
                             <div>
                                <x-input-label for="start_date" :value="__('Dari Tanggal')" />
                                <x-text-input id="start_date" type="date" name="start_date" class="filter-input w-full mt-1" :value="$request->start_date" />
                            </div>
                             <div>
                                <x-input-label for="end_date" :value="__('Sampai Tanggal')" />
                                <x-text-input id="end_date" type="date" name="end_date" class="filter-input w-full mt-1" :value="$request->end_date" />
                            </div>
                        </div>

                         <div class="flex items-center gap-4 mt-4">
                            <a href="{{ route('guru.pelanggaran-siswa.index') }}" class="text-sm text-slate-600 hover:text-slate-900">Reset Filter</a>
                        </div>
                    </form>

                    {{-- Sisa kode tabel tidak berubah --}}
                    @if (session('success'))
                        <div class="mb-4 p-4 bg-green-100 text-green-800 border border-green-300 rounded-lg">{{ session('success') }}</div>
                    @endif
                    <div class="overflow-x-auto border-t border-slate-200">
                        <table class="min-w-full divide-y divide-slate-200">
                            <thead class="bg-slate-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Nama Siswa</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Kelas</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Jenis Pelanggaran</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Tanggal</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-200">
                                @forelse ($pelanggaranSiswa as $item)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">{{ $item->siswa->nama }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">{{ $item->siswa->kelas }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">{{ $item->jenisPelanggaran->nama_pelanggaran }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">{{ \Carbon\Carbon::parse($item->tanggal_pelanggaran)->isoFormat('D MMM YYYY, HH:mm') }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="{{ route('guru.pelanggaran-siswa.edit', $item->id) }}" class="inline-block px-3 py-1 text-sm font-semibold text-teal-600 bg-teal-50 rounded-md hover:bg-teal-100">Edit</a>
                                            <form action="{{ route('guru.pelanggaran-siswa.destroy', $item->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus catatan pelanggaran ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="ml-2 px-3 py-1 text-sm font-semibold text-red-600 bg-red-50 rounded-md hover:bg-red-100">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-6 py-4 text-center text-slate-500">Tidak ada data yang cocok dengan filter.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                     @if ($pelanggaranSiswa->hasPages())
                        <div class="p-4 border-t border-slate-200">
                            {{ $pelanggaranSiswa->links() }}
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
                    // Hanya submit jika value tidak kosong (untuk tanggal)
                    if (this.value !== '') {
                        form.submit();
                    }
                });
            });
        });
    </script>
    @endpush
</x-app-layout>