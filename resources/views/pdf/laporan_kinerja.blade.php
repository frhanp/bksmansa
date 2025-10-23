<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Kinerja Guru BK</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 11pt; color: #1e293b; }
        h2 { text-align: center; margin-bottom: 0.4cm; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #cbd5e1; padding: 6px 8px; font-size: 10pt; }
        th { background: #f1f5f9; text-align: left; }
        .footer { position: fixed; bottom: 0; text-align: center; font-size: 9pt; color: #64748b; }
    </style>
</head>
<body>
    <h2>Laporan Kinerja Guru BK</h2>

    <p>
        <strong>Periode:</strong>
        {{ $periodeAwal ? \Carbon\Carbon::parse($periodeAwal)->format('d/m/Y') : '-' }} -
        {{ $periodeAkhir ? \Carbon\Carbon::parse($periodeAkhir)->format('d/m/Y') : '-' }}
    </p>

    <table>
        <thead>
            <tr>
                <th>Nama Guru BK</th>
                <th>Jumlah Jadwal Konseling</th>
                <th>Jumlah Laporan Konseling</th>
                <th>Jenis Kasus Ditangani</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($guruBk as $row)
                <tr>
                    <td>{{ $row['nama'] }}</td>
                    <td>{{ $row['total_jadwal'] }}</td>
                    <td>{{ $row['total_laporan'] }}</td>
                    <td>{{ $row['jenis_kasus'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        Dicetak otomatis oleh Sistem BK — {{ now()->translatedFormat('d F Y, H:i') }}
    </div>
</body>
</html>
