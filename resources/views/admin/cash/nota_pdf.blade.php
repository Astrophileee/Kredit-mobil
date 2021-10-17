<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Aloha!</title>

    <style>
        * {
            font-family: Verdana, Arial, sans-serif;
        }

        table {
            font-size: x-small;
        }

        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }

        .gray {
            background-color: lightgray
        }

    </style>

</head>

<body>

    <table width="100%" style="margin-bottom: 25px">
        <tr>
            <td>
                <img src="{{ public_path('image/icon.png') }}" width="115px" alt="">
            </td>
            <td valign="top">
                <h3 style="margin: 0; margin-bottom: 8px">PT Duta Mobil Iqbal Indonesia</h3>
                <div>Jl. Harapan Bunda No. 12 Bandung</div>
                <div>www.dutaiqbal.com</div>
                <div>Telp (0263) 261265</div>
            </td>
            <td valign="top" align="right">
                <div><b>Tgl {{date('d-M-Y', strtotime($cash->tgl_beli_cash))}}</b></div>
                <div><b>No. {{$cash->kode_cash}}</b></div>
            </td>
        </tr>

    </table>

    <table>
        <tr>
            <td><b>Terima dari</b></td>
            <td>:</td>
            <td colspan="3"><u>{{strtoupper($cash->pembeli->nama_pembeli)}}</u></td>
        </tr>
        <tr>
            <td><b>Jumlah Uang</b></td>
            <td>:</td>
            <td colspan="3"><u>{{ strtoupper(terbilang($cash->bayar_cash)) }} RUPIAH</u></td>
        </tr>
        <tr>
            <td><b>Untuk Pembayaran</b></td>
            <td>:</td>
            <td colspan="3">Mobil {{$cash->mobil->merk}}</td>
        </tr>
        <tr>
            <td>Warna</td>
            <td>:</td>
            <td><u>{{$cash->mobil->warna}}</u></td>
        </tr>
        <tr>
            <td>Tipe / Jenis</td>
            <td>:</td>
            <td><u>{{$cash->mobil->type}}</u></td>
        </tr>
        <tr>
            <td>Atas Nama STNK</td>
            <td>:</td>
            <td><u>{{strtoupper($cash->pembeli->nama_pembeli)}}</u></td>
        </tr>
        <tr valign="top">
            <td>Alamat</td>
            <td>:</td>
            <td><u>{{strtoupper($cash->pembeli->alamat_pembeli)}}</u></td>
        </tr>
        <tr valign="top">
            <td><b>Keterangan</b></td>
            <td>:</td>
            <td colspan="3">Pembayaran {{$cash->pembeli->nama_pembeli}} Lunas</td>
        </tr>
    </table>

    <br>

    <table border="1" style="border-collapse: collapse; min-width: 20%;">
        <tr>
            <td ><b>Rp {{number_format($cash->bayar_cash)}}</b></td>
        </tr>
    </table>

    <br>

    <table style="font-size: 0.6em">
        <tr>
            <td>{{date('d/m/Y h:i:s')}}</td>
        </tr>
        <tr>
            <td>DUTAMOTOR</td>
        </tr>
    </table>

</body>

</html>
