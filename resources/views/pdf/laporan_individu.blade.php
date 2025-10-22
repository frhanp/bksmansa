<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Kasus Individu - {{ $siswa->nama }}</title>
    <style>
        @page { margin: 2.5cm 2cm; }
        body { font-family: 'DejaVu Sans', sans-serif; font-size: 11pt; color: #1e293b; }
        h2, h3 { color: #111827; margin-bottom: 0.4em; }
        h2 { text-align: center; text-transform: uppercase; font-size: 14pt; letter-spacing: 0.5px; }
        hr { border: 0; border-top: 1px solid #cbd5e1; margin: 0.6em 0; }
        table { width: 100%; border-collapse: collapse; margin-top: 0.5em; }
        th, td { border: 1px solid #cbd5e1; padding: 6px 8px; font-size: 10pt; vertical-align: top; }
        th { background: #f1f5f9; font-weight: 600; text-align: left; color: #0f172a; }
        ul { margin: 0.2em 0 0.5em 1em; padding: 0; }
        .text-muted { color: #64748b; font-style: italic; }
        .section { margin-bottom: 1.2cm; }
        .header { text-align: center; margin-bottom: 1cm; }
        .school-title { font-weight: bold; font-size: 13pt; color: #1e3a8a; }
        .footer { position: fixed; bottom: 0; left: 0; right: 0; font-size: 9pt; text-align: center; color: #64748b; }
    </style>
</head>
<body>

    {{-- HEADER SEKOLAH --}}
    <div class="header">
        <div class="school-title">Bimbingan Konseling - SMA Negeri 1 Gorontalo</div>
        <div class="text-muted">Laporan Kasus Individu</div>
        <hr>
    </div>

    {{-- JUDUL --}}
    <h2>Laporan Kasus Individu</h2>

    {{-- DATA SISWA --}}
    <div class="section">
        <table>
            <tr>
                <th width="25%">Nama Siswa</th>
                <td>{{ $siswa->nama }}</td>
            </tr>
            <tr>
                <th>NIS</th>
                <td>{{ $siswa->nis }}</td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>{{ $siswa->kelas }}</td>
            </tr>
            <tr>
                <th>Total Poin Pelanggaran</th>
                <td><strong style="color:#dc2626;">{{ $siswa->totalPoin() }} poin</strong></td>
            </tr>
        </table>
    </div>

    {{-- RIWAYAT PELANGGARAN --}}
    <div class="section">
        <h3>Riwayat Pelanggaran</h3>
        @if ($siswa->pelanggaran->isEmpty())
            <p class="text-muted">Tidak ada pelanggaran tercatat.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th width="18%">Tanggal</th>
                        <th>Jenis Pelanggaran</th>
                        <th width="12%">Poin</th>
                        <th>Catatan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswa->pelanggaran as $pel)
                        <tr>
                            <td>{{ \Carbon\Carbon::parse($pel->tanggal_pelanggaran)->format('d/m/Y') }}</td>
                            <td>{{ $pel->jenisPelanggaran->nama_pelanggaran }}</td>
                            <td style="color:#dc2626; font-weight:bold;">{{ $pel->jenisPelanggaran->poin }}</td>
                            <td>{{ $pel->catatan ?? '-' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

    {{-- RIWAYAT BIMBINGAN --}}
    <div class="section">
        <h3>Riwayat Bimbingan Konseling</h3>
        @if ($siswa->laporanBimbingan->isEmpty())
            <p class="text-muted">Belum ada laporan bimbingan.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th width="18%">Tanggal</th>
                        <th>Isi Laporan</th>
                        <th width="28%">Tindak Lanjut</th>
                        <th width="14%">Jenis</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswa->laporanBimbingan->sortByDesc('created_at') as $lap)
                        <tr>
                            <td>{{ \Carbon\Carbon::parse($lap->created_at)->format('d/m/Y') }}</td>
                            <td>{{ $lap->isi_laporan }}</td>
                            <td>{{ $lap->rencana_tindak_lanjut ?? '-' }}</td>
                            <td>{{ $lap->jenis_surat ?? 'Umum' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

    {{-- FOOTER --}}
    <div class="footer">
        Dicetak otomatis oleh Sistem BK pada {{ now()->translatedFormat('d F Y, H:i') }}
    </div>

</body>
</html>
