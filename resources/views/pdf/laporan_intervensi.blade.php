<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Intervensi & Tindak Lanjut</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 11pt; color: #1e293b; }
        h2 { text-align: center; margin-bottom: 0.4cm; }
        table { width: 100%; border-collapse: collapse; margin-top: 0.3cm; }
        th, td { border: 1px solid #cbd5e1; padding: 6px 8px; font-size: 10pt; }
        th { background: #f1f5f9; text-align: left; }
        .footer { position: fixed; bottom: 0; text-align: center; font-size: 9pt; color: #64748b; }
    </style>
</head>
<body>
    <h2>Laporan Intervensi & Tindak Lanjut</h2>

    <p>
        <strong>Periode:</strong>
        {{ $periodeAwal ? \Carbon\Carbon::parse($periodeAwal)->format('d/m/Y') : '-' }} -
        {{ $periodeAkhir ? \Carbon\Carbon::parse($periodeAkhir)->format('d/m/Y') : '-' }}<br>
        <strong>Status:</strong> {{ $status ? ucfirst($status) : 'Semua' }}
    </p>

    <table>
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Siswa</th>
                <th>Guru BK</th>
                <th>Status</th>
                <th>Catatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ \Carbon\Carbon::parse($item->tanggal_jadwal)->format('d/m/Y') }}</td>
                    <td>{{ $item->siswa->nama }}</td>
                    <td>{{ $item->guru->nama ?? '-' }}</td>
                    <td>{{ $item->laporanBimbingan->isNotEmpty() ? 'Sudah' : 'Belum' }}</td>
                    <td>{{ $item->laporanBimbingan->first()->rencana_tindak_lanjut ?? '-' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        Dicetak otomatis oleh Sistem BK — {{ now()->translatedFormat('d F Y, H:i') }}
    </div>
</body>
</html>
