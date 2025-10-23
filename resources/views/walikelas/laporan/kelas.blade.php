<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-slate-800 leading-tight">
                {{ __('Laporan Kelas') }}
            </h2>
            <a href="{{ route('walikelas.laporan.kelas.pdf', request()->all()) }}" 
               class="bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium px-4 py-2 rounded-lg shadow-sm transition-all">
               Download PDF
            </a>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 space-y-8">

            {{-- Filter Kelas --}}
            <div class="bg-white shadow-md rounded-xl p-6 border border-slate-200">
                <form method="GET" action="{{ route('walikelas.laporan.kelas') }}" class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1">
                        <label class="block text-sm font-medium text-slate-600 mb-1">Kelas</label>
                        <input type="text" name="kelas" value="{{ request('kelas') }}" class="w-full rounded-md border-slate-300 text-sm" placeholder="Misal: XI IPA 1">
                    </div>
                    <div class="flex items-end">
                        <button type="submit" class="bg-indigo-600 text-white text-sm font-medium px-4 py-2 rounded-md hover:bg-indigo-700 transition">
                            Tampilkan
                        </button>
                    </div>
                </form>
            </div>

            {{-- Data Laporan --}}
            <div class="bg-white shadow-md rounded-xl p-6 border border-slate-200">
                @if ($data->isEmpty())
                    <p class="text-slate-500 italic">Tidak ada data siswa untuk kelas ini.</p>
                @else
                    <div class="overflow-x-auto">
                        <table class="min-w-full border border-slate-200 text-sm">
                            <thead class="bg-slate-50 text-slate-700">
                                <tr>
                                    <th class="px-4 py-2 text-left">Nama Siswa</th>
                                    <th class="px-4 py-2 text-left">Kelas</th>
                                    <th class="px-4 py-2 text-left">Jumlah Pelanggaran</th>
                                    <th class="px-4 py-2 text-left">Total Poin</th>
                                    <th class="px-4 py-2 text-left">Sesi Bimbingan</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-200">
                                @foreach ($data as $row)
                                    <tr class="hover:bg-slate-50">
                                        <td class="px-4 py-2">{{ $row['nama'] }}</td>
                                        <td class="px-4 py-2">{{ $row['kelas'] }}</td>
                                        <td class="px-4 py-2">{{ $row['pelanggaran'] }}</td>
                                        <td class="px-4 py-2 text-red-600 font-semibold">{{ $row['poin'] }}</td>
                                        <td class="px-4 py-2">{{ $row['bimbingan'] }}</td>
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
