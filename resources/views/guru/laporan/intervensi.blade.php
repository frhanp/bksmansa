<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-slate-800 leading-tight">
                {{ __('Laporan Intervensi & Tindak Lanjut') }}
            </h2>
            <a href="{{ route('guru.laporan.intervensi.pdf', request()->all()) }}"
               class="bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium px-4 py-2 rounded-lg shadow-sm transition-all">
               Download PDF
            </a>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 space-y-8">

            {{-- Filter --}}
            <div class="bg-white shadow-md rounded-xl p-6 border border-slate-200">
                <form method="GET" action="{{ route('guru.laporan.intervensi') }}" class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-600 mb-1">Periode Awal</label>
                        <input type="date" name="periode_awal" value="{{ request('periode_awal') }}" class="w-full rounded-md border-slate-300 text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-600 mb-1">Periode Akhir</label>
                        <input type="date" name="periode_akhir" value="{{ request('periode_akhir') }}" class="w-full rounded-md border-slate-300 text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-600 mb-1">Status</label>
                        <select name="status" class="w-full rounded-md border-slate-300 text-sm">
                            <option value="">Semua</option>
                            <option value="sudah" {{ request('status') == 'sudah' ? 'selected' : '' }}>Sudah Ditindaklanjuti</option>
                            <option value="belum" {{ request('status') == 'belum' ? 'selected' : '' }}>Belum Ditindaklanjuti</option>
                        </select>
                    </div>
                    <div class="flex items-end">
                        <button type="submit" class="bg-indigo-600 text-white text-sm font-medium px-4 py-2 rounded-md hover:bg-indigo-700 transition">
                            Tampilkan
                        </button>
                    </div>
                </form>
            </div>

            {{-- Data --}}
            <div class="bg-white shadow-md rounded-xl p-6 border border-slate-200">
                <h3 class="text-lg font-semibold text-slate-700 mb-4 border-b pb-2">Data Intervensi</h3>

                @if ($data->isEmpty())
                    <p class="text-slate-500 italic">Tidak ada data intervensi pada periode ini.</p>
                @else
                    <div class="overflow-x-auto">
                        <table class="min-w-full border border-slate-200 text-sm">
                            <thead class="bg-slate-50 text-slate-700">
                                <tr>
                                    <th class="px-4 py-2 text-left">Tanggal</th>
                                    <th class="px-4 py-2 text-left">Siswa</th>
                                    <th class="px-4 py-2 text-left">Guru BK</th>
                                    <th class="px-4 py-2 text-left">Status</th>
                                    <th class="px-4 py-2 text-left">Catatan</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-200">
                                @foreach ($data as $item)
                                    <tr class="hover:bg-slate-50">
                                        <td class="px-4 py-2">{{ \Carbon\Carbon::parse($item->tanggal_jadwal)->translatedFormat('d F Y') }}</td>
                                        <td class="px-4 py-2">{{ $item->siswa->nama }}</td>
                                        <td class="px-4 py-2">{{ $item->guru->name ?? '-' }}</td>
                                        <td class="px-4 py-2">
                                            @if ($item->laporanBimbingan->isNotEmpty())
                                                <span class="text-green-700 font-medium">Sudah</span>
                                            @else
                                                <span class="text-red-700 font-medium">Belum</span>
                                            @endif
                                        </td>
                                        <td class="px-4 py-2">
                                            {{ $item->laporanBimbingan->first()->rencana_tindak_lanjut ?? '-' }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
