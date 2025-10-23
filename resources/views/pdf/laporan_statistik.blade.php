<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Tren & Statistik Sekolah</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 11pt; color: #1e293b; }
        h2 { text-align: center; margin-bottom: 0.5cm; }
        table { width: 100%; border-collapse: collapse; margin-top: 0.3cm; }
        th, td { border: 1px solid #cbd5e1; padding: 6px 8px; font-size: 10pt; }
        th { background: #f1f5f9; text-align: left; }
        .footer { position: fixed; bottom: 0; text-align: center; font-size: 9pt; color: #64748b; }
    </style>
</head>
<body>
    <h2>Laporan Tren & Statistik Sekolah {{ $tahun }}</h2>

    <p><strong>Efektivitas Penanganan:</strong> {{ $efektivitas }}%</p>

    <h4>Jenis Pelanggaran Terbanyak:</h4>
    <table>
        <thead>
            <tr>
                <th>Jenis Pelanggaran</th>
                <th>Jumlah Kasus</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jenisKasus as $jk)
                <tr>
                    <td>{{ $jk->nama_pelanggaran }}</td>
                    <td>{{ $jk->total }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        Dicetak otomatis oleh Sistem BK — {{ now()->translatedFormat('d F Y, H:i') }}
    </div>
</body>
</html>
