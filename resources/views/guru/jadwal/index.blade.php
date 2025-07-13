<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Jadwal Bimbingan Konseling') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-medium text-slate-900">Daftar Jadwal Anda</h3>
                        <a href="{{ route('guru.jadwal-bimbingan.create') }}"
                            class="inline-flex items-center px-4 py-2 bg-teal-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-teal-500 focus:bg-teal-700">
                            Buat Jadwal Baru
                        </a>
                    </div>

                    @if (session('success'))
                        <div class="mb-4 p-4 bg-green-100 text-green-800 border border-green-300 rounded-lg">
                            {{ session('success') }}</div>
                    @endif

                    <div class="overflow-x-auto border-t border-slate-200">
                        <table class="min-w-full divide-y divide-slate-200">
                            <thead class="bg-slate-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Siswa
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Tanggal
                                        & Waktu</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Status
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-200">
                                @forelse ($jadwal as $item)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">
                                            {{ $item->siswa->nama }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">
                                            {{ \Carbon\Carbon::parse($item->tanggal_jadwal)->isoFormat('dddd, D MMMM YYYY, HH:mm') }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            @php
                                                $statusClass =
                                                    [
                                                        'menunggu_verifikasi' => 'bg-amber-100 text-amber-800',
                                                        'terverifikasi' => 'bg-blue-100 text-blue-800',
                                                        'selesai' => 'bg-green-100 text-green-800',
                                                        'dibatalkan' => 'bg-red-100 text-red-800',
                                                    ][$item->status] ?? 'bg-slate-100 text-slate-800';
                                            @endphp
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $statusClass }}">
                                                {{ str_replace('_', ' ', Str::title($item->status)) }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            {{-- Jika jadwal sudah ada laporannya, tampilkan tombol Lihat Laporan --}}
                                            @if ($item->laporan)
                                                <a href="{{ route('guru.laporan.show', $item->laporan->id) }}"
                                                    class="inline-block px-3 py-1 text-sm font-semibold text-green-600 bg-green-50 rounded-md hover:bg-green-100">Lihat
                                                    Laporan</a>

                                                {{-- Jika statusnya terverifikasi/selesai tapi belum ada laporan, tampilkan tombol Buat Laporan --}}
                                            @elseif(in_array($item->status, ['terverifikasi', 'selesai']))
                                                <a href="{{ route('guru.laporan.create', $item->id) }}"
                                                    class="inline-block px-3 py-1 text-sm font-semibold text-blue-600 bg-blue-50 rounded-md hover:bg-blue-100">Buat
                                                    Laporan</a>
                                            @endif

                                            <a href="{{ route('guru.jadwal-bimbingan.edit', $item->id) }}"
                                                class="ml-2 inline-block px-3 py-1 text-sm font-semibold text-teal-600 bg-teal-50 rounded-md hover:bg-teal-100">Edit
                                                Jadwal</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-4 text-center text-slate-500">Belum ada jadwal
                                            yang dibuat.</td>
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
</x-app-layout>
