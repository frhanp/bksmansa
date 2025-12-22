<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Dashboard Guru BK') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            {{-- 1. BOX TUPOKSI (Penyempurnaan Revisi 3) --}}
            <div class="mb-8 p-6 bg-teal-50 border-l-4 border-teal-500 rounded-r-xl shadow-sm">
                <div class="flex items-center gap-3 mb-2">
                    <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <h3 class="font-bold text-teal-900">Tugas Pokok & Fungsi (Tupoksi)</h3>
                </div>
                <p class="text-sm text-teal-800 leading-relaxed">
                    Fokus utama Anda adalah <strong>Eksekusi Pembinaan</strong>. Gunakan sistem ini untuk mencatat pelanggaran harian, mengelola jadwal bimbingan siswa, dan menindaklanjuti instruksi (disposisi) dari pimpinan untuk kasus-kasus kritis.
                </p>
            </div>

            {{-- 2. NOTIFIKASI INSTRUKSI WAKASEK (Fitur Disposisi) --}}
            @if($instruksiWakasek->count() > 0)
                <div class="mb-8 space-y-4">
                    <h3 class="text-sm font-bold text-slate-500 uppercase tracking-widest flex items-center gap-2">
                        <span class="relative flex h-3 w-3">
                          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-amber-400 opacity-75"></span>
                          <span class="relative inline-flex rounded-full h-3 w-3 bg-amber-500"></span>
                        </span>
                        Instruksi Pimpinan Perlu Tindak Lanjut
                    </h3>
                    @foreach($instruksiWakasek as $disposisi)
                        <div class="bg-white border-l-4 border-amber-500 p-5 shadow-sm rounded-r-xl border border-slate-200">
                            <div class="flex justify-between items-start">
                                <div class="flex gap-4">
                                    <div class="bg-amber-100 p-2 rounded-lg h-fit">
                                        <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                                    </div>
                                    <div>
                                        <div class="flex items-center gap-2 mb-1">
                                            <h4 class="text-sm font-bold text-slate-900 uppercase">Dari: {{ $disposisi->pemberi->name }}</h4>
                                            <span class="text-[10px] bg-slate-100 text-slate-500 px-2 py-0.5 rounded-full font-medium">{{ $disposisi->created_at->diffForHumans() }}</span>
                                        </div>
                                        <p class="text-sm text-slate-600">Siswa: <span class="font-bold text-teal-700">{{ $disposisi->siswa->nama }} ({{ $disposisi->siswa->kelas }})</span></p>
                                        <div class="mt-2 p-3 bg-slate-50 rounded-lg border border-slate-100 italic text-sm text-slate-700">
                                            "{{ $disposisi->pesan }}"
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('guru.siswa.show', $disposisi->siswa->id) }}" class="text-xs font-bold text-teal-600 hover:text-teal-700 bg-teal-50 px-3 py-2 rounded-lg transition-colors">
                                    Proses Sekarang &rarr;
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                {{-- 3. JADWAL AKAN DATANG --}}
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-slate-900 mb-4">Jadwal Terverifikasi yang Akan Datang</h3>
                        <div class="space-y-4">
                            @forelse ($jadwalAkanDatang as $jadwal)
                                <div class="flex items-center p-4 bg-slate-50 rounded-lg border border-slate-100 group hover:border-teal-300 transition-colors">
                                    <div class="flex-1">
                                        <p class="font-semibold text-teal-700">{{ $jadwal->siswa->nama }}</p>
                                        <p class="text-sm text-slate-500">{{ $jadwal->siswa->kelas }}</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-sm font-medium text-slate-800">{{ \Carbon\Carbon::parse($jadwal->tanggal_jadwal)->isoFormat('dddd, D MMM') }}</p>
                                        <p class="text-xs text-slate-500">{{ \Carbon\Carbon::parse($jadwal->tanggal_jadwal)->isoFormat('HH:mm') }}</p>
                                    </div>
                                </div>
                            @empty
                                <p class="text-center text-sm text-slate-500 py-4 italic">Tidak ada jadwal bimbingan aktif.</p>
                            @endforelse
                        </div>
                    </div>
                </div>

                {{-- 4. SISWA POIN TERTINGGI --}}
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-slate-900 mb-4">Siswa dengan Poin Pelanggaran Tertinggi</h3>
                        <div class="overflow-x-auto">
                            <table class="min-w-full">
                                <thead class="border-b border-slate-200 text-slate-500 uppercase text-[10px] font-bold">
                                    <tr>
                                        <th class="py-2 text-left">Nama Siswa</th>
                                        <th class="py-2 text-left">Kelas</th>
                                        <th class="py-2 text-center">Total Poin</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100">
                                    @forelse ($siswaPoinTertinggi as $siswa)
                                        <tr class="hover:bg-slate-50 transition-colors">
                                            <td class="py-3 text-sm font-medium text-slate-800">{{ $siswa->nama }}</td>
                                            <td class="py-3 text-sm text-slate-500">{{ $siswa->kelas }}</td>
                                            <td class="py-3 text-sm font-bold text-center {{ $siswa->total_poin > 50 ? 'text-red-500' : 'text-slate-800' }}">
                                                {{ $siswa->total_poin }}
                                            </td>
                                        </tr>
                                    @empty
                                        <tr><td colspan="3" class="py-10 text-center text-sm text-slate-400 italic">Data pelanggaran masih kosong.</td></tr>
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