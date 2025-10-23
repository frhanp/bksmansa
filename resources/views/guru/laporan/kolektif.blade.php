<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-slate-800 leading-tight">
                {{ __('Laporan Kasus Kolektif') }}
            </h2>
            <a href="{{ route('guru.laporan.kolektif.pdf', request()->all()) }}" 
               class="bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium px-4 py-2 rounded-lg shadow-sm transition-all">
                Download PDF
            </a>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 space-y-8">

            {{-- Filter --}}
            <div class="bg-white p-6 rounded-xl shadow border border-slate-200">
                <form method="GET" action="{{ route('guru.laporan.kolektif') }}" class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-600 mb-1">Jenis Kasus</label>
                        <select name="jenis_kasus" class="w-full rounded-md border-slate-300 text-sm">
                            <option value="">Semua</option>
                            @foreach ($daftarJenis as $jenis)
                                <option value="{{ $jenis->nama_pelanggaran }}" {{ request('jenis_kasus') == $jenis->nama_pelanggaran ? 'selected' : '' }}>
                                    {{ $jenis->nama_pelanggaran }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-600 mb-1">Kelas</label>
                        <input type="text" name="kelas" value="{{ request('kelas') }}" class="w-full rounded-md border-slate-300 text-sm" placeholder="Misal: X IPA 2">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-600 mb-1">Periode Awal</label>
                        <input type="date" name="periode_awal" value="{{ request('periode_awal') }}" class="w-full rounded-md border-slate-300 text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-600 mb-1">Periode Akhir</label>
                        <input type="date" name="periode_akhir" value="{{ request('periode_akhir') }}" class="w-full rounded-md border-slate-300 text-sm">
                    </div>

                    <div class="md:col-span-4 flex justify-end mt-3">
                        <button type="submit" class="bg-indigo-600 text-white text-sm font-medium px-4 py-2 rounded-md hover:bg-indigo-700 transition">
                            Tampilkan
                        </button>
                    </div>
                </form>
            </div>

            {{-- Hasil Laporan --}}
            <div class="bg-white p-6 rounded-xl shadow border border-slate-200">
                <h3 class="text-lg font-semibold text-slate-700 mb-4 border-b pb-2">Hasil Rekapitulasi</h3>

                @if ($data->isEmpty())
                    <p class="text-slate-500 italic">Tidak ada data pelanggaran untuk filter yang dipilih.</p>
                @else
                    @foreach ($data as $jenis => $list)
                        <div class="mb-6">
                            <h4 class="text-md font-semibold text-indigo-700 mb-2">{{ $jenis }}</h4>
                            <table class="min-w-full border border-slate-200 text-sm">
                                <thead class="bg-slate-50">
                                    <tr>
                                        <th class="px-3 py-2 text-left">Nama Siswa</th>
                                        <th class="px-3 py-2 text-left">Kelas</th>
                                        <th class="px-3 py-2 text-left">Tanggal</th>
                                        <th class="px-3 py-2 text-left">Catatan</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-200">
                                    @foreach ($list as $item)
                                        <tr class="hover:bg-slate-50">
                                            <td class="px-3 py-2">{{ $item->siswa->nama }}</td>
                                            <td class="px-3 py-2">{{ $item->siswa->kelas }}</td>
                                            <td class="px-3 py-2">{{ \Carbon\Carbon::parse($item->tanggal_pelanggaran)->translatedFormat('d F Y') }}</td>
                                            <td class="px-3 py-2">{{ $item->catatan ?? '-' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endforeach
                @endif
            </div>

        </div>
    </div>
</x-app-layout>
