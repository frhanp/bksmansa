<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Dasbor Orang Tua') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl mb-6">
                <div class="p-6 md:flex md:items-center md:justify-between">
                    <div>
                        <h3 class="text-lg font-medium text-slate-900">
                            Data Perkembangan Anak Anda
                        </h3>
                        <div class="mt-2 text-sm text-slate-600">
                            <p><span class="font-semibold">Nama:</span> {{ $siswa->nama }}</p>
                            <p><span class="font-semibold">Kelas:</span> {{ $siswa->kelas }}</p>
                            <p><span class="font-semibold">Wali Kelas:</span> {{ $siswa->waliKelas->nama }}</p>
                        </div>
                    </div>
                    <div class="mt-4 md:mt-0 text-center bg-slate-50 p-4 rounded-lg">
                        <p class="text-sm font-medium text-slate-500">Total Poin Pelanggaran</p>
                        <p class="text-4xl font-bold {{ $siswa->totalPoin() > 50 ? 'text-red-500' : 'text-teal-600' }}">
                            {{ $siswa->totalPoin() }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-6">
                     <div class="border-b border-slate-200 pb-4 mb-6">
                        <h3 class="text-lg font-medium text-slate-900">
                            Riwayat Pelanggaran Tercatat
                        </h3>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-slate-200">
                            <thead class="bg-slate-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Tanggal</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Jenis Pelanggaran</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Poin</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Catatan</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-200">
                                @forelse ($siswa->pelanggaran as $pelanggaran)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">{{ \Carbon\Carbon::parse($pelanggaran->tanggal_pelanggaran)->isoFormat('D MMM YYYY') }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">{{ $pelanggaran->jenisPelanggaran->nama_pelanggaran }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-slate-800">{{ $pelanggaran->jenisPelanggaran->poin }}</td>
                                        <td class="px-6 py-4 text-sm text-slate-700">{{ $pelanggaran->catatan ?? '-' }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-4 text-center text-slate-500">
                                            Alhamdulillah, belum ada catatan pelanggaran.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>