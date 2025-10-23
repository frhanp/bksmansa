<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Kelas</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 11pt; color: #1e293b; }
        h2 { text-align: center; margin-bottom: 0.5cm; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #cbd5e1; padding: 6px 8px; font-size: 10pt; }
        th { background: #f1f5f9; text-align: left; }
        .footer { position: fixed; bottom: 0; text-align: center; font-size: 9pt; color: #64748b; }
    </style>
</head>
<body>
    <h2>Laporan Kelas {{ $kelas ?? 'Semua' }}</h2>

    @if ($data->isEmpty())
        <p>Tidak ada data siswa untuk kelas ini.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Jumlah Pelanggaran</th>
                    <th>Total Poin</th>
                    <th>Sesi Bimbingan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $row)
                    <tr>
                        <td>{{ $row['nama'] }}</td>
                        <td>{{ $row['kelas'] }}</td>
                        <td>{{ $row['pelanggaran'] }}</td>
                        <td>{{ $row['poin'] }}</td>
                        <td>{{ $row['bimbingan'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <div class="footer">
        Dicetak otomatis oleh Sistem BK — {{ now()->translatedFormat('d F Y, H:i') }}
    </div>
</body>
</html>
