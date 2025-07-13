<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Bimbingan Konseling</title>
    <style>
        body { font-family: 'Helvetica', 'Arial', sans-serif; font-size: 12px; line-height: 1.6; color: #333; }
        .header { text-align: center; margin-bottom: 40px; }
        .header h1 { margin: 0; font-size: 18px; }
        .header p { margin: 0; font-size: 14px; }
        .content-table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        .content-table th, .content-table td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        .content-table th { background-color: #f2f2f2; font-weight: bold; }
        .section { margin-bottom: 20px; }
        .section h2 { font-size: 14px; border-bottom: 1px solid #ccc; padding-bottom: 5px; margin-bottom: 10px; }
        .section p { white-space: pre-wrap; }
        .footer { margin-top: 50px; text-align: right; }
    </style>
</head>
<body>
    <div class="header">
        <h1>LAPORAN BIMBINGAN KONSELING</h1>
        <p>SMAN 1 GORONTALO</p>
    </div>

    <table class="content-table">
        <tr>
            <th style="width: 25%;">Nama Siswa</th>
            <td>{{ $laporanBimbingan->jadwalBimbingan->siswa->nama }}</td>
        </tr>
        <tr>
            <th>Kelas</th>
            <td>{{ $laporanBimbingan->jadwalBimbingan->siswa->kelas }}</td>
        </tr>
        <tr>
            <th>Tanggal Bimbingan</th>
            <td>{{ \Carbon\Carbon::parse($laporanBimbingan->jadwalBimbingan->tanggal_jadwal)->isoFormat('dddd, D MMMM YYYY') }}</td>
        </tr>
        <tr>
            <th>Konselor</th>
            <td>{{ $laporanBimbingan->dibuatOleh->name }}</td>
        </tr>
    </table>

    <div class="section">
        <h2>Hasil Konseling</h2>
        <p>{{ $laporanBimbingan->isi_laporan }}</p>
    </div>

    @if($laporanBimbingan->rencana_tindak_lanjut)
    <div class="section">
        <h2>Rencana Tindak Lanjut</h2>
        <p>{{ $laporanBimbingan->rencana_tindak_lanjut }}</p>
    </div>
    @endif

    <div class="footer">
        <p>Gorontalo, {{ \Carbon\Carbon::now()->isoFormat('D MMMM YYYY') }}</p>
        <br><br><br>
        <p>{{ $laporanBimbingan->dibuatOleh->name }}</p>
    </div>
</body>
</html>