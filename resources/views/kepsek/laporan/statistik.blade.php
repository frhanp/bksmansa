<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-slate-800 leading-tight">
                {{ __('Laporan Tren & Statistik Sekolah') }}
            </h2>
            <a href="{{ route('kepsek.laporan.statistik.pdf', ['tahun' => $tahun]) }}"
               class="bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium px-4 py-2 rounded-lg shadow-sm transition-all">
               Download PDF
            </a>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 space-y-8">

            {{-- Filter Tahun --}}
            <div class="bg-white shadow-md rounded-xl p-6 border border-slate-200">
                <form method="GET" action="{{ route('kepsek.laporan.statistik') }}" class="flex flex-wrap items-end gap-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-600 mb-1">Tahun</label>
                        <input type="number" name="tahun" value="{{ $tahun }}" class="rounded-md border-slate-300 text-sm w-32">
                    </div>
                    <button type="submit" class="bg-indigo-600 text-white text-sm font-medium px-4 py-2 rounded-md hover:bg-indigo-700 transition">
                        Tampilkan
                    </button>
                </form>
            </div>

            {{-- Statistik --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white shadow-md rounded-xl p-6 border border-slate-200 text-center">
                    <h3 class="text-slate-500 text-sm mb-2">Efektivitas Penanganan</h3>
                    <p class="text-3xl font-bold text-indigo-600">{{ $efektivitas }}%</p>
                </div>
            </div>

            {{-- Grafik Tren --}}
            <div class="bg-white shadow-md rounded-xl p-6 border border-slate-200">
                <h3 class="text-lg font-semibold text-slate-700 mb-4">Tren Kasus per Bulan ({{ $tahun }})</h3>
                <canvas id="chartKasusBulanan" height="100"></canvas>
            </div>

            {{-- Jenis Pelanggaran --}}
            <div class="bg-white shadow-md rounded-xl p-6 border border-slate-200">
                <h3 class="text-lg font-semibold text-slate-700 mb-4">5 Jenis Pelanggaran Terbanyak</h3>
                <table class="min-w-full border border-slate-200 text-sm">
                    <thead class="bg-slate-50 text-slate-700">
                        <tr>
                            <th class="px-4 py-2 text-left">Jenis Pelanggaran</th>
                            <th class="px-4 py-2 text-left">Jumlah Kasus</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200">
                        @foreach ($jenisKasus as $jk)
                            <tr>
                                <td class="px-4 py-2">{{ $jk->nama_pelanggaran }}</td>
                                <td class="px-4 py-2">{{ $jk->total }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Chart.js --}}
    @php
    // Ubah Collection jadi array agar bisa dipakai di JS
    $kasusArray = $kasusBulanan->toArray();
@endphp

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('chartKasusBulanan').getContext('2d');

    // Data dari backend (sudah jadi array)
    const dataKasus = @json(array_values($kasusArray));
    const labelBulan = @json(array_map(
        fn($b) => \Carbon\Carbon::create()->month($b)->translatedFormat('F'),
        array_keys($kasusArray)
    ));

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: labelBulan,
            datasets: [{
                label: 'Jumlah Kasus',
                data: dataKasus,
                borderColor: '#4f46e5',
                tension: 0.3,
                fill: false
            }]
        },
        options: {
            scales: {
                y: { beginAtZero: true }
            }
        }
    });
</script>

</x-app-layout>