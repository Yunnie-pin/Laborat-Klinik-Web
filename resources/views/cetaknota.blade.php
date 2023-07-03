<html>

<head>
    <meta charset="UTF-8" http-equiv="Content-Type" content="text/html" />
    <title>Nota Hasil Pemeriksaan</title>
    <style>
        @page {
            margin: 0px;
        }

        body {
            margin: 0px;
        }

        table {
            width: 70%;
            margin: auto;
            border: 1px solid;
            border-collapse: collapse;
        }

        td {
            text-align: left;
            width: 25%;
            padding: .5rem;
            border: 1px solid;
        }

        .detail td,
        .detail th {
            padding: .5rem;
            border: 1px solid;
            width: 45%;
        }
    </style>
</head>

<body>
    <h3 style="text-align: center">
        Cetak Nota <br />
        Web Klinik
    </h3>
    <div style="width: 70%;margin:auto">
        <h3>Tanggal : {{ $dataPemeriksaan->created_at->translatedFormat('l, d / F / Y') }}</h3>
    </div>
    <table>
        <tr>
            <td colspan="2">
                <b>Pasien</b>
            </td>
            <td colspan="2">
                <b>Dokter</b>
            </td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>{{ $dataPemeriksaan->pasiens->nama }}</td>
            <td>Nama Dokter</td>
            <td>{{ $dataPemeriksaan->user->nama_lengkap }}</td>
        </tr>
        <tr>
            <td>No. Telp.</td>
            <td>{{ $dataPemeriksaan->pasiens->no_telp }}</td>
            <td>No. Telp</td>
            <td>{{ $dataPemeriksaan->user->no_telp }}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>{{ $dataPemeriksaan->pasiens->jenis_kelamin }}</td>
            <td colspan="2"></td>
        </tr>
        <tr>
            <td>Jenis Identitas</td>
            <td>{{ $dataPemeriksaan->pasiens->jenis_identitas }}</td>

        </tr>
        <tr>
            <td>No. Identitas</td>
            <td>{{ $dataPemeriksaan->pasiens->no_identitas }}</td>

        </tr>
        <tr>
            <td>BPJS</td>
            <td>{{ $dataPemeriksaan->pasiens->bpjs }}</td>
            <td colspan="2" style="border:0;"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>{{ $dataPemeriksaan->pasiens->alamat }}</td>
            <td colspan="2" style="border:0;"></td>
        </tr>
    </table>
    <div style="width: 70%;margin:auto">
        <h3>Detail Pemeriksaan :</h3>
    </div>
    <?php $total = 0 ?>
    <table class="detail">
        <thead>
            <tr>
                <th style="width: 2rem;">No.</th>
                <th>Nama Pemeriksaan</th>
                <th>Harga</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($dataPemeriksaan->keterangan as $value)
            
                <tr>
                    <th style="width: 2rem;">{{ $loop->iteration }}</th>
                    <td>{{ $value->parameter->parameter }}</td>
                    <td>{{ $value->parameter->harga }}</td>
                </tr>
                <?php $total = $total + $value->parameter->harga ?>
               
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="2">Total Harga</th>
                <th>{{ $total }}</th>
            </tr>
        </tfoot>
    </table>
</body>

</html>
