<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ Auth::user()->role == 'wakasek' ? __('Dashboard Wakasek Kesiswaan') : __('Dashboard Kepala Sekolah') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            {{-- BOX TUPOKSI (Penjelasan Tugas) --}}
            <div class="mb-8 p-6 bg-teal-50 border-l-4 border-teal-500 rounded-r-xl shadow-sm">
                <div class="flex items-center gap-3 mb-2">
                    <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <h3 class="font-bold text-teal-900">Tugas Pokok & Fungsi (Tupoksi)</h3>
                </div>
                <p class="text-sm text-teal-800 leading-relaxed">
                    @if(Auth::user()->role == 'wakasek')
                        Sebagai <strong>Wakasek Kesiswaan</strong>, fokus utama Anda adalah pengawasan kedisiplinan harian. Gunakan dashboard ini untuk memantau siswa dengan akumulasi poin tinggi dan berikan <strong>Disposisi</strong> (instruksi langsung) kepada Guru BK untuk tindakan lebih lanjut.
                    @else
                        Sebagai <strong>Kepala Sekolah</strong>, fokus Anda adalah pemantauan strategis. Gunakan grafik tren untuk mengevaluasi efektivitas program bimbingan konseling dan pastikan kinerja staf BK berjalan optimal sesuai target sekolah.
                    @endif
                </p>
            </div>

            {{-- CARD STATISTIK UMUM --}}
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                @foreach([
                    ['Total Siswa', $stats['total_siswa'], 'bg-blue-500'],
                    ['Pelanggaran', $stats['total_pelanggaran'], 'bg-red-500'],
                    ['Laporan Selesai', $stats['total_laporan'], 'bg-green-500'],
                    ['Jadwal Aktif', $stats['jadwal_aktif'], 'bg-amber-500']
                ] as $item)
                <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100 text-center">
                    <p class="text-xs font-medium text-slate-500 uppercase tracking-wider mb-2">{{ $item[0] }}</p>
                    <p class="text-3xl font-bold text-slate-800">{{ $item[1] }}</p>
                </div>
                @endforeach
            </div>

            <div class="grid grid-cols-1 gap-8">
                @if(Auth::user()->role == 'wakasek')
                    {{-- TAMPILAN KHUSUS WAKASEK: DAFTAR SISWA KRITIS --}}
                    <div class="bg-white shadow-sm sm:rounded-xl overflow-hidden border border-slate-200">
                        <div class="p-6 border-b border-slate-100 bg-slate-50 flex justify-between items-center">
                            <h3 class="font-bold text-red-700 uppercase text-sm tracking-widest">Siswa Butuh Penanganan Segera (>50 Poin)</h3>
                            <span class="px-3 py-1 bg-red-100 text-red-700 text-xs font-bold rounded-full">Zona Merah</span>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-slate-200">
                                <thead class="bg-white">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-semibold text-slate-500 uppercase">Siswa</th>
                                        <th class="px-6 py-3 text-center text-xs font-semibold text-slate-500 uppercase">Total Poin</th>
                                        <th class="px-6 py-3 text-left text-xs font-semibold text-slate-500 uppercase">Berikan Instruksi (Disposisi)</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-slate-100">
                                    @forelse($siswaKritis as $s)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">{{ $s->nama }} ({{ $s->kelas }})</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-lg font-bold text-red-600">{{ $s->total_poin }}</td>
                                        <td class="px-6 py-4">
                                            @if($s->activeDisposisi)
                                                {{-- Jika ada instruksi yang sedang berjalan --}}
                                                <div class="p-3 bg-amber-50 border border-amber-200 rounded-lg">
                                                    <div class="flex items-center gap-2 mb-1 text-[10px] font-bold text-amber-700 uppercase">
                                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                        Sedang Diproses Guru BK
                                                    </div>
                                                    <p class="text-xs text-slate-600 italic">"{{ $s->activeDisposisi->pesan }}"</p>
                                                    <p class="text-[9px] text-slate-400 mt-1 italic">Dikirim: {{ $s->activeDisposisi->created_at->diffForHumans() }}</p>
                                                </div>
                                            @else
                                                {{-- Jika tidak ada instruksi aktif, tampilkan form input --}}
                                                <form action="{{ route('kepsek.disposisi.store', $s->id) }}" method="POST" class="flex gap-2">
                                                    @csrf
                                                    <input type="text" name="pesan" placeholder="Beri instruksi baru..." required 
                                                        class="text-sm w-full border-slate-300 rounded-lg focus:ring-teal-500 focus:border-teal-500">
                                                    <x-primary-button class="text-[10px] whitespace-nowrap">Kirim</x-primary-button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                    @empty
                                    <tr><td colspan="3" class="px-6 py-10 text-center text-slate-400 italic">Alhamdulillah, tidak ada siswa di zona merah.</td></tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                @else
                    {{-- TAMPILAN KHUSUS KEPSEK: GRAFIK TREN --}}
                    <div class="bg-white p-8 rounded-xl shadow-sm border border-slate-200">
                        <div class="flex justify-between items-center mb-8">
                            <h3 class="font-bold text-slate-800">Analisis Tren Kedisiplinan</h3>
                            <form action="{{ route('kepsek.dashboard') }}" method="GET">
                                <select name="tahun" onchange="this.form.submit()" class="border-slate-300 rounded-lg text-sm">
                                    @foreach($availableYears as $y)
                                        <option value="{{ $y }}" @selected($y == $selectedYear)>Tahun {{ $y }}</option>
                                    @endforeach
                                </select>
                            </form>
                        </div>
                        <div id="chart"></div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    @if(Auth::user()->role == 'kepala_sekolah')
    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new ApexCharts(document.querySelector("#chart"), {
                series: [{ name: 'Pelanggaran', data: @json($chartValues) }],
                chart: { type: 'area', height: 350, toolbar: {show:false} },
                colors: ['#0d9488'],
                stroke: { curve: 'smooth' },
                xaxis: { categories: @json($labels) },
                fill: { type: 'gradient', gradient: { shadeIntensity: 1, opacityFrom: 0.7, opacityTo: 0.3 } }
            }).render();
        });
    </script>
    @endpush
    @endif
</x-app-layout>