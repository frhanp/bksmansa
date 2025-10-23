<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-slate-800 leading-tight">
                {{ __('Laporan Kinerja Guru BK') }}
            </h2>
            <a href="{{ route('kepsek.laporan.kinerja.pdf', request()->all()) }}"
               class="bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium px-4 py-2 rounded-lg shadow-sm transition-all">
               Download PDF
            </a>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 space-y-8">

            {{-- Filter --}}
            <div class="bg-white shadow-md rounded-xl p-6 border border-slate-200">
                <form method="GET" action="{{ route('kepsek.laporan.kinerja') }}" class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-600 mb-1">Periode Awal</label>
                        <input type="date" name="periode_awal" value="{{ request('periode_awal') }}" class="w-full rounded-md border-slate-300 text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-600 mb-1">Periode Akhir</label>
                        <input type="date" name="periode_akhir" value="{{ request('periode_akhir') }}" class="w-full rounded-md border-slate-300 text-sm">
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
                @if ($guruBk->isEmpty())
                    <p class="text-slate-500 italic">Tidak ada data guru BK.</p>
                @else
                    <div class="overflow-x-auto">
                        <table class="min-w-full border border-slate-200 text-sm">
                            <thead class="bg-slate-50 text-slate-700">
                                <tr>
                                    <th class="px-4 py-2 text-left">Nama Guru BK</th>
                                    <th class="px-4 py-2 text-left">Jumlah Jadwal Konseling</th>
                                    <th class="px-4 py-2 text-left">Jumlah Laporan Konseling</th>
                                    <th class="px-4 py-2 text-left">Jenis Kasus Ditangani</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-200">
                                @foreach ($guruBk as $row)
                                    <tr class="hover:bg-slate-50">
                                        <td class="px-4 py-2">{{ $row['nama'] }}</td>
                                        <td class="px-4 py-2">{{ $row['total_jadwal'] }}</td>
                                        <td class="px-4 py-2">{{ $row['total_laporan'] }}</td>
                                        <td class="px-4 py-2">{{ $row['jenis_kasus'] }}</td>
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
