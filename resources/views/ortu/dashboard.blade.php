<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Dasbor Orang Tua') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- ================= AWAL MODIFIKASI ================= --}}

            @if ($siswa)
                {{-- TAMPILAN NORMAL JIKA DATA SISWA DITEMUKAN --}}
                <div class="mb-6">
                    <h3 class="text-lg font-medium text-slate-900">Selamat Datang, {{ Auth::user()->name }}!</h3>
                    <p class="text-sm text-slate-500">Anda login sebagai orang tua/wali dari ananda {{ $siswa->nama }}.</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                    <div class="lg:col-span-1 space-y-6">
                        
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                            <div class="p-6">
                                <h3 class="text-base font-medium text-slate-900 mb-4">Profil Ananda</h3>
                                <div class="space-y-3">
                                    <div class="flex justify-between items-center text-sm">
                                        <span class="text-slate-500">Nama Lengkap</span>
                                        <span class="font-semibold text-slate-800">{{ $siswa->nama }}</span>
                                    </div>
                                    <div class="flex justify-between items-center text-sm">
                                        <span class="text-slate-500">Kelas</span>
                                        <span class="font-semibold text-slate-800">{{ $siswa->kelas }}</span>
                                    </div>
                                    <div class="flex justify-between items-center text-sm">
                                        <span class="text-slate-500">Total Poin</span>
                                        <span class="font-bold text-red-500">{{ $siswa->totalPoin() }} Poin</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                            <div class="p-6">
                                 <h3 class="text-base font-medium text-slate-900 mb-4">Wali Kelas</h3>
                                 <div class="flex items-center space-x-4">
                                     <div class="flex-shrink-0">
                                         <div class="w-12 h-12 rounded-full bg-slate-200 flex items-center justify-center">
                                             <span class="text-lg font-bold text-slate-500">{{ substr($waliKelasUser->name, 0, 1) }}</span>
                                         </div>
                                     </div>
                                     <div class="flex-1 min-w-0">
                                         <p class="text-sm font-semibold text-slate-900 truncate">{{ $waliKelasUser->name }}</p>
                                         <p class="text-sm text-slate-500 truncate">Wali Kelas {{ $siswa->kelas }}</p>
                                     </div>
                                 </div>
                                 @if ($waliKelasUser->phone_number)
                                    @php
                                        $nomorWhatsapp = preg_replace('/^0/', '62', $waliKelasUser->phone_number);
                                        $pesan = urlencode("Selamat pagi/siang Bapak/Ibu " . $waliKelasUser->name . ", saya orang tua/wali dari ananda " . $siswa->nama . " kelas " . $siswa->kelas . ".");
                                    @endphp
                                    <a href="https://wa.me/{{ $nomorWhatsapp }}?text={{ $pesan }}" target="_blank" class="mt-4 w-full flex items-center justify-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-600">
                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.894 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.886-.001 2.269.654 4.512 1.907 6.346l-.315 1.149 1.182-.307zm4.913 5.422c-.078-.048-.272-.132-.39-.187-.118-.055-1.104-.543-1.275-.605-.171-.062-.297-.099-.424.099-.127.198-.483.606-.594.727-.11.123-.22.138-.418.048-.198-.09-.904-.335-1.72-1.062-.637-.577-1.05-1.29-1.175-1.511-.124-.22-.013-.344.088-.443.091-.091.203-.232.304-.345.102-.112.127-.198.19-.33.063-.132.034-.248-.015-.344-.05-.096-.424-1.016-.579-1.383-.153-.368-.307-.315-.424-.32-.112-.005-.246-.005-.368-.005-.122 0-.317.048-.484.247-.167.198-.636.619-.636 1.511 0 .893.652 1.758.742 1.878.09.123 1.273 1.936 3.08 2.735.419.19.742.298 1.002.383.478.152.923.129 1.262.078.384-.058 1.104-.455 1.258-.893.153-.438.153-.811.105-.893-.048-.083-.171-.132-.368-.247z"/></svg>
                                        <span>Hubungi via WhatsApp</span>
                                    </a>
                                 @else
                                    <p class="mt-4 text-xs text-center text-slate-400 italic">Nomor telepon wali kelas tidak tersedia.</p>
                                 @endif
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-2 space-y-6">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                            <div class="p-6">
                                <h3 class="text-lg font-medium text-slate-900 border-b border-slate-200 pb-4 mb-6">Riwayat Bimbingan Konseling</h3>
                                <div class="overflow-x-auto">
                                    <table class="min-w-full divide-y divide-slate-200">
                                        <thead class="bg-slate-50">
                                            <tr>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Tanggal</th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Status</th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-slate-200">
                                            @forelse ($siswa->jadwalBimbingan as $jadwal)
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">
                                                        {{ \Carbon\Carbon::parse($jadwal->tanggal_jadwal)->isoFormat('D MMM YYYY') }}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                                        @php
                                                            $statusClass = [
                                                                'selesai' => 'bg-green-100 text-green-800',
                                                            ][$jadwal->status] ?? 'bg-slate-100 text-slate-800';
                                                        @endphp
                                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $statusClass }}">
                                                            {{ str_replace('_', ' ', Str::title($jadwal->status)) }}
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                        @if ($jadwal->laporan && $jadwal->status == 'selesai')
                                                            <a href="{{ route('ortu.laporan.show', $jadwal->laporan->id) }}" class="inline-block px-3 py-1 text-sm font-semibold text-teal-600 bg-teal-50 rounded-md hover:bg-teal-100">
                                                                Lihat Laporan
                                                            </a>
                                                        @else
                                                            -
                                                        @endif
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="3" class="px-6 py-4 text-center text-slate-500">Belum ada riwayat bimbingan.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                            <div class="p-6">
                                <h3 class="text-lg font-medium text-slate-900 border-b border-slate-200 pb-4 mb-6">Riwayat Pelanggaran Tercatat</h3>
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
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">
                                                        {{ \Carbon\Carbon::parse($pelanggaran->tanggal_pelanggaran)->isoFormat('D MMM YYYY') }}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">
                                                        {{ $pelanggaran->jenisPelanggaran->nama_pelanggaran }}</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-slate-800">
                                                        {{ $pelanggaran->jenisPelanggaran->poin }}</td>
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

            @else
                {{-- TAMPILAN JIKA DATA SISWA TIDAK DITEMUKAN --}}
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                    <div class="p-6 text-center">
                        <h3 class="text-lg font-medium text-slate-900">Data Siswa Tidak Terhubung</h3>
                        <p class="mt-2 text-sm text-slate-600">
                            Akun Anda belum terhubung dengan data siswa mana pun. Mohon hubungi pihak sekolah atau administrator untuk menautkan akun Anda dengan data anak Anda.
                        </p>
                    </div>
                </div>
            @endif

            {{-- ================= AKHIR MODIFIKASI ================= --}}
        </div>
    </div>
</x-app-layout>