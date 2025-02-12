<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan Gaji</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 20px;
        }
        .container {
            background: white;
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        }
        h2 {
            color: #333;
        }
        table {
            width: 100%;
            margin-top: 10px;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    if (isset($_POST['hitung'])) {
        $nama = $_POST['nama'];
        $divisi = $_POST['divisi'];
        $gaji_perbulan = $_POST['gaji_perbulan'];
        $npwp = $_POST['npwp'];

        $gaji_tahunan = $gaji_perbulan * 12;
        $kena_pajak = $gaji_tahunan > 54000000;
        $potongan_pajak = 0;

        if ($kena_pajak) {
            if ($npwp == "ya") {
                $potongan_pajak = $gaji_tahunan * 0.15;
            } else {
                $potongan_pajak = $gaji_tahunan * 0.20;
            }
        }

        $gaji_bersih_tahunan = $gaji_tahunan - $potongan_pajak;
        $gaji_bersih_perbulan = $gaji_bersih_tahunan / 12;
    ?>
    
    <h2>Hasil Perhitungan Gaji</h2>
    <table>
        <tr>
            <th>Keterangan</th>
            <th>Detail</th>
        </tr>
        <tr>
            <td>Nama Karyawan</td>
            <td><b><?= $nama; ?></b></td>
        </tr>
        <tr>
            <td>Divisi</td>
            <td><b><?= $divisi; ?></b></td>
        </tr>
        <tr>
            <td>Total Gaji Kotor Per Tahun</td>
            <td><b>Rp <?= number_format($gaji_tahunan, 0, ',', '.'); ?></b></td>
        </tr>
        <tr>
            <td>Potongan Pajak</td>
            <td><b>Rp <?= number_format($potongan_pajak, 0, ',', '.'); ?></b></td>
        </tr>
        <tr>
            <td>Gaji Bersih Per Bulan</td>
            <td><b>Rp <?= number_format($gaji_bersih_perbulan, 0, ',', '.'); ?></b></td>
        </tr>
    </table>

    <?php } ?>
</div>

</body>
</html>