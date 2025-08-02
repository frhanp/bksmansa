<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Verifikasi & Kelola Jadwal Bimbingan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-6">
                    <div class="border-b border-slate-200 pb-4 mb-6">
                        <h3 class="text-lg font-medium text-slate-900">Daftar Semua Jadwal Bimbingan</h3>
                        <p class="mt-1 text-sm text-slate-500">Gunakan filter untuk meninjau jadwal bimbingan yang diajukan.</p>
                    </div>

                     <form id="filter-form" action="{{ route('admin.jadwal.index') }}" method="GET" class="mb-6">
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
                                <x-input-label for="filter_konselor" :value="__('Filter Konselor')" />
                                <select name="filter_konselor" id="filter_konselor" class="filter-input w-full mt-1 border-slate-300 rounded-md shadow-sm">
                                    <option value="">Semua Konselor</option>
                                    @foreach($konselorFilter as $konselor)
                                        <option value="{{ $konselor->id }}" @selected($request->filter_konselor == $konselor->id)>{{ $konselor->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <x-input-label for="filter_status" :value="__('Filter Status')" />
                                <select name="filter_status" id="filter_status" class="filter-input w-full mt-1 border-slate-300 rounded-md shadow-sm">
                                    <option value="">Semua Status</option>
                                    <option value="menunggu_verifikasi" @selected($request->filter_status == 'menunggu_verifikasi')>Menunggu Verifikasi</option>
                                    <option value="terverifikasi" @selected($request->filter_status == 'terverifikasi')>Terverifikasi</option>
                                    <option value="selesai" @selected($request->filter_status == 'selesai')>Selesai</option>
                                    <option value="dibatalkan" @selected($request->filter_status == 'dibatalkan')>Dibatalkan</option>
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
                            <a href="{{ route('admin.jadwal.index') }}" class="text-sm text-slate-600 hover:text-slate-900">Reset Filter</a>
                        </div>
                    </form>

                    @if (session('success'))
                        <div class="mb-4 p-4 bg-green-100 text-green-800 border border-green-300 rounded-lg">{{ session('success') }}</div>
                    @endif

                    <div class="overflow-x-auto border-t border-slate-200">
                        <table class="min-w-full divide-y divide-slate-200">
                            <thead class="bg-slate-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Siswa</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Konselor</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Jadwal Diajukan</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Status</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-200">
                                @forelse ($jadwal as $item)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            <div class="font-medium text-slate-900">{{ $item->siswa->nama }}</div>
                                            <div class="text-slate-500">{{ $item->siswa->kelas }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">{{ $item->konselor->name }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">{{ \Carbon\Carbon::parse($item->tanggal_jadwal)->isoFormat('dddd, D MMM YYYY, HH:mm') }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            @php
                                                $statusClass = [
                                                    'menunggu_verifikasi' => 'bg-amber-100 text-amber-800',
                                                    'terverifikasi' => 'bg-blue-100 text-blue-800',
                                                    'selesai' => 'bg-green-100 text-green-800',
                                                    'dibatalkan' => 'bg-red-100 text-red-800',
                                                ][$item->status] ?? 'bg-slate-100 text-slate-800';
                                            @endphp
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $statusClass }}">
                                                {{ str_replace('_', ' ', Str::title($item->status)) }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            @if($item->status == 'menunggu_verifikasi')
                                                <form action="{{ route('admin.jadwal.update', $item->id) }}" method="POST" class="inline-block">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input type="hidden" name="status" value="terverifikasi">
                                                    <button type="submit" class="inline-block px-3 py-1 text-sm font-semibold text-green-600 bg-green-50 rounded-md hover:bg-green-100">Verifikasi</button>
                                                </form>
                                                <form action="{{ route('admin.jadwal.update', $item->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin membatalkan jadwal ini?');">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input type="hidden" name="status" value="dibatalkan">
                                                    <button type="submit" class="ml-2 px-3 py-1 text-sm font-semibold text-red-600 bg-red-50 rounded-md hover:bg-red-100">Batalkan</button>
                                                </form>
                                            @else
                                                <span class="text-xs text-slate-400">Tidak ada aksi</span>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-6 py-4 text-center text-slate-500">Tidak ada jadwal yang cocok dengan filter.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                     @if ($jadwal->hasPages())
                        <div class="p-4 border-t border-slate-200">
                            {{ $jadwal->links() }}
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