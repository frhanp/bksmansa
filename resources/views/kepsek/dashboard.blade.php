<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Dashboard Pimpinan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-6">
                <h3 class="text-lg font-medium text-slate-900">Selamat Datang, {{ Auth::user()->name }}!</h3>
                <p class="text-sm text-slate-500">Berikut adalah ringkasan statistik dari sistem Bimbingan Konseling.</p>
            </div>

            {{-- ================= AWAL MODIFIKASI ================= --}}
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                <div class="lg:col-span-2">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                        <div class="p-6">
                            <div class="flex flex-wrap justify-between items-center mb-4">
                                <h3 class="text-lg font-medium text-slate-900">Tren Pelanggaran Siswa</h3>
                                <form id="filter-form" action="{{ route('kepsek.dashboard') }}" method="GET" class="flex items-center gap-4">
                                    <select name="tahun" onchange="this.form.submit()" class="filter-input border-slate-300 rounded-md shadow-sm text-sm focus:border-teal-500 focus:ring-teal-500">
                                        @forelse($availableYears as $year)
                                            <option value="{{ $year }}" @selected($year == $selectedYear)>Tahun {{ $year }}</option>
                                        @empty
                                            <option>{{ date('Y') }}</option>
                                        @endforelse
                                    </select>
                                    <select name="semester" onchange="this.form.submit()" class="filter-input border-slate-300 rounded-md shadow-sm text-sm focus:border-teal-500 focus:ring-teal-500">
                                        <option value="">Semua Semester</option>
                                        <option value="1" @selected($selectedSemester == 1)>Semester 1 (Jan-Jun)</option>
                                        <option value="2" @selected($selectedSemester == 2)>Semester 2 (Jul-Des)</option>
                                    </select>
                                </form>
                            </div>
                            <div id="chart" class="w-full"></div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-1 space-y-6">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl p-4">
                            <p class="text-xs font-medium text-slate-500 truncate">Total Siswa</p>
                            <p class="mt-1 text-2xl font-semibold text-slate-900">{{ $stats['total_siswa'] }}</p>
                        </div>
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl p-4">
                            <p class="text-xs font-medium text-slate-500 truncate">Total Pelanggaran</p>
                            <p class="mt-1 text-2xl font-semibold text-slate-900">{{ $stats['total_pelanggaran'] }}</p>
                        </div>
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl p-4">
                            <p class="text-xs font-medium text-slate-500 truncate">Laporan Selesai</p>
                            <p class="mt-1 text-2xl font-semibold text-slate-900">{{ $stats['total_laporan'] }}</p>
                        </div>
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl p-4">
                            <p class="text-xs font-medium text-slate-500 truncate">Jadwal Aktif</p>
                            <p class="mt-1 text-2xl font-semibold text-slate-900">{{ $stats['jadwal_aktif'] }}</p>
                        </div>
                    </div>

                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                        <div class="p-6">
                            <h3 class="text-base font-medium text-slate-900 mb-4">Siswa Poin Tertinggi</h3>
                            <ul class="space-y-3">
                                @forelse ($highPointStudents as $siswa)
                                <li class="flex items-center justify-between text-sm">
                                    <div>
                                        <p class="font-semibold text-slate-800">{{ $siswa->nama }}</p>
                                        <p class="text-xs text-slate-500">{{ $siswa->kelas }}</p>
                                    </div>
                                    <span class="font-bold text-red-500">{{ $siswa->total_poin ?? 0 }} Poin</span>
                                </li>
                                @empty
                                <p class="text-sm text-slate-500 text-center">Tidak ada data pelanggaran.</p>
                                @endforelse
                            </ul>
                        </div>
                    </div>

                     <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                        <div class="p-6">
                            <h3 class="text-base font-medium text-slate-900 mb-4">Laporan Terbaru</h3>
                             <ul class="space-y-3">
                                @forelse ($recentReports as $laporan)
                                <li class="text-sm">
                                     <a href="{{ route('kepsek.laporan.show', $laporan->id) }}" class="font-semibold text-teal-600 hover:underline">Laporan untuk {{ $laporan->jadwalBimbingan->siswa->nama }}</a>
                                     <p class="text-xs text-slate-500">{{ $laporan->created_at->diffForHumans() }}</p>
                                </li>
                                @empty
                                <p class="text-sm text-slate-500 text-center">Belum ada laporan yang dibuat.</p>
                                @endforelse
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            {{-- ================= AKHIR MODIFIKASI ================= --}}
        </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var options = {
                series: [{
                    name: 'Jumlah Pelanggaran',
                    data: @json($chartData)
                }],
                chart: {
                    height: 350,
                    type: 'area',
                    toolbar: { show: false },
                    zoom: { enabled: false }
                },
                colors: ['#0d9488'],
                dataLabels: { enabled: false },
                stroke: { curve: 'smooth' },
                xaxis: {
                    categories: @json($labels),
                    labels: {
                        style: {
                            colors: '#64748b',
                            fontSize: '12px',
                        },
                    }
                },
                yaxis: {
                    labels: {
                        style: {
                            colors: '#64748b',
                            fontSize: '12px',
                        },
                         formatter: function (val) {
                            return Math.floor(val);
                        }
                    },
                },
                grid: {
                    borderColor: '#e2e8f0',
                    strokeDashArray: 4,
                },
                tooltip: {
                    x: {
                        format: 'MMMM'
                    },
                },
            };

            var chart = new ApexCharts(document.querySelector("#chart"), options);
            chart.render();
        });
    </script>
    @endpush
</x-app-layout>