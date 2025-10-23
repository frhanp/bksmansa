<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Kasus Kolektif</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 11pt; color: #1e293b; }
        h2, h3 { color: #111827; margin-bottom: 0.4em; }
        table { width: 100%; border-collapse: collapse; margin-top: 0.3cm; }
        th, td { border: 1px solid #cbd5e1; padding: 6px 8px; font-size: 10pt; }
        th { background: #f1f5f9; font-weight: 600; text-align: left; }
        .section { margin-bottom: 1.2cm; }
        .footer { position: fixed; bottom: 0; left: 0; right: 0; text-align: center; font-size: 9pt; color: #64748b; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Laporan Kasus Kolektif</h2>
    <p><strong>Jenis Kasus:</strong> {{ $jenisKasus ?? 'Semua' }}<br>
       <strong>Kelas:</strong> {{ $kelas ?? 'Semua' }}<br>
       <strong>Periode:</strong> 
       {{ $periodeAwal ? \Carbon\Carbon::parse($periodeAwal)->format('d/m/Y') : '-' }} - 
       {{ $periodeAkhir ? \Carbon\Carbon::parse($periodeAkhir)->format('d/m/Y') : '-' }}
    </p>

    <hr>

    @forelse ($data as $jenis => $list)
        <h3>{{ $jenis }}</h3>
        <table>
            <thead>
                <tr>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Tanggal</th>
                    <th>Catatan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list as $item)
                    <tr>
                        <td>{{ $item->siswa->nama }}</td>
                        <td>{{ $item->siswa->kelas }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->tanggal_pelanggaran)->format('d/m/Y') }}</td>
                        <td>{{ $item->catatan ?? '-' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
    @empty
        <p>Tidak ada data pelanggaran.</p>
    @endforelse

    <div class="footer">
        Dicetak otomatis oleh Sistem BK — {{ now()->translatedFormat('d F Y, H:i') }}
    </div>
</body>
</html>
