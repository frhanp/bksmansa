<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-slate-800 leading-tight">
                {{ __('Detail Siswa: ') . $siswa->nama }}
            </h2>
            <a href="{{ route('guru.siswa.index') }}" class="text-sm font-semibold text-teal-600 hover:text-teal-800">&larr; Kembali ke Daftar Siswa</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                <div class="lg:col-span-1 space-y-6">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-slate-900 border-b border-slate-200 pb-4">Profil Siswa</h3>
                            <div class="mt-4 space-y-2 text-sm">
                                <p><strong class="text-slate-500">Nama:</strong><br>{{ $siswa->nama }}</p>
                                <p><strong class="text-slate-500">NIS:</strong><br>{{ $siswa->nis }}</p>
                                <p><strong class="text-slate-500">Kelas:</strong><br>{{ $siswa->kelas }}</p>
                                <p><strong class="text-slate-500">Wali Kelas:</strong><br>{{ $siswa->waliKelas->nama }}</p>
                            </div>
                        </div>
                         <div class="px-6 py-4 bg-slate-50 border-t border-slate-200">
                             <h4 class="font-medium text-slate-900 mb-3">Aksi Cepat</h4>
                             <div class="space-y-2">
                                <a href="{{ route('guru.pelanggaran-siswa.create', ['siswa_id' => $siswa->id]) }}" class="block w-full text-center px-4 py-2 bg-red-50 text-red-700 rounded-lg text-sm font-semibold hover:bg-red-100">Catat Pelanggaran</a>
                                <a href="{{ route('guru.jadwal-bimbingan.create', ['siswa_id' => $siswa->id]) }}" class="block w-full text-center px-4 py-2 bg-blue-50 text-blue-700 rounded-lg text-sm font-semibold hover:bg-blue-100">Buat Jadwal Bimbingan</a>
                             </div>
                        </div>
                    </div>
                     <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                        <div class="p-6 text-center">
                            <p class="text-sm font-medium text-slate-500">Total Poin Pelanggaran</p>
                            <p class="text-5xl font-bold mt-2 {{ $siswa->totalPoin() > 50 ? 'text-red-500' : 'text-teal-600' }}">{{ $siswa->totalPoin() }}</p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-2 space-y-6">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-slate-900 border-b border-slate-200 pb-4 mb-4">Riwayat Pelanggaran</h3>
                            <div class="overflow-x-auto">
                                <table class="min-w-full">
                                    <thead class="bg-slate-50">
                                        <tr>
                                            <th class="px-4 py-2 text-left text-xs font-medium text-slate-500 uppercase">Pelanggaran</th>
                                            <th class="px-4 py-2 text-left text-xs font-medium text-slate-500 uppercase">Poin</th>
                                            <th class="px-4 py-2 text-left text-xs font-medium text-slate-500 uppercase">Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-slate-200">
                                        @forelse ($siswa->pelanggaran as $pelanggaran)
                                            <tr>
                                                <td class="px-4 py-3 text-sm text-slate-800">{{ $pelanggaran->jenisPelanggaran->nama_pelanggaran }}</td>
                                                <td class="px-4 py-3 text-sm font-bold text-slate-800">{{ $pelanggaran->jenisPelanggaran->poin }}</td>
                                                <td class="px-4 py-3 text-sm text-slate-500">{{ \Carbon\Carbon::parse($pelanggaran->tanggal_pelanggaran)->isoFormat('D MMM YYYY') }}</td>
                                            </tr>
                                        @empty
                                            <tr><td colspan="3" class="px-4 py-3 text-center text-sm text-slate-500">Tidak ada riwayat pelanggaran.</td></tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>