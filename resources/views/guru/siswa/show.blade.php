<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-slate-800">
                {{ __('Detail Siswa: ') . $siswa->nama }}
            </h2>
            <a href="{{ route('guru.siswa.index') }}" class="text-sm font-semibold text-teal-600 hover:text-teal-800">&larr; Kembali</a>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-5">

                {{-- Kolom Kiri --}}
                <div class="space-y-5">
                    {{-- Profil --}}
                    <div class="bg-white shadow-sm rounded-lg p-5">
                        <h3 class="text-base font-semibold text-slate-700 border-b pb-3">Profil Siswa</h3>
                        <div class="mt-3 space-y-1 text-sm">
                            <p><span class="text-slate-500">Nama:</span> {{ $siswa->nama }}</p>
                            <p><span class="text-slate-500">NIS:</span> {{ $siswa->nis }}</p>
                            <p><span class="text-slate-500">Kelas:</span> {{ $siswa->kelas }}</p>
                            <p><span class="text-slate-500">Wali Kelas:</span> {{ $siswa->waliKelas->nama }}</p>
                        </div>
                    </div>

                    {{-- Aksi + Poin --}}
                    <div class="bg-white shadow-sm rounded-lg p-5">
                        <h3 class="text-base font-semibold text-slate-700 border-b pb-3">Aksi Cepat & Poin</h3>
                        <div class="mt-4 grid grid-cols-2 gap-4 text-sm">
                            <div class="space-y-2">
                                <a href="{{ route('guru.pelanggaran-siswa.create',['siswa_id'=>$siswa->id]) }}" class="block w-full px-3 py-2 text-center bg-red-50 text-red-700 rounded hover:bg-red-100">Catat Pelanggaran</a>
                                <a href="{{ route('guru.jadwal-bimbingan.create',['siswa_id'=>$siswa->id]) }}" class="block w-full px-3 py-2 text-center bg-blue-50 text-blue-700 rounded hover:bg-blue-100">Buat Jadwal Bimbingan</a>
                                @if($siswa->waliMurid && $siswa->waliMurid->nomor_telepon)
                                    @php
                                        $wa = preg_replace('/^0/', '62', $siswa->waliMurid->nomor_telepon);
                                        $pesan = urlencode("Halo Bapak/Ibu ".$siswa->waliMurid->nama.", perihal ananda ".$siswa->nama.".");
                                    @endphp
                                    <a href="https://wa.me/{{ $wa }}?text={{ $pesan }}" target="_blank" class="block w-full px-3 py-2 text-center bg-green-50 text-green-700 rounded hover:bg-green-100">Hubungi Ortu (WA)</a>
                                @else
                                    <p class="text-xs text-center text-slate-400 italic">Nomor ortu tidak tersedia.</p>
                                @endif
                            </div>
                            <div class="flex flex-col items-center justify-center bg-slate-50 rounded p-4">
                                <p class="text-xs text-slate-500">Total Poin</p>
                                <p class="mt-1 text-4xl font-bold {{ $siswa->totalPoin()>50 ? 'text-red-500':'text-teal-600' }}">{{ $siswa->totalPoin() }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Kolom Kanan --}}
                <div class="lg:col-span-2">
                    <div class="bg-white shadow-sm rounded-lg p-5">
                        <h3 class="text-base font-semibold text-slate-700 border-b pb-3 mb-3">Riwayat Pelanggaran</h3>
                        <div class="overflow-x-auto">
                            <table class="min-w-full text-sm">
                                <thead class="bg-slate-50">
                                    <tr>
                                        <th class="px-4 py-2 text-left font-medium text-slate-500 uppercase">Pelanggaran</th>
                                        <th class="px-4 py-2 text-left font-medium text-slate-500 uppercase">Poin</th>
                                        <th class="px-4 py-2 text-left font-medium text-slate-500 uppercase">Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-200">
                                    @forelse ($siswa->pelanggaran as $pelanggaran)
                                        <tr>
                                            <td class="px-4 py-2 text-slate-800">{{ $pelanggaran->jenisPelanggaran->nama_pelanggaran }}</td>
                                            <td class="px-4 py-2 font-bold text-slate-800">{{ $pelanggaran->jenisPelanggaran->poin }}</td>
                                            <td class="px-4 py-2 text-slate-500">{{ \Carbon\Carbon::parse($pelanggaran->tanggal_pelanggaran)->isoFormat('D MMM YYYY') }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="px-4 py-3 text-center text-slate-500">Tidak ada riwayat pelanggaran.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
