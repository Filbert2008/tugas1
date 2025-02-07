<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nama = $_POST['nama'];
    $tmptlahir = $_POST['tmptlahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['Alamat'];
    $date = $_POST['date'];
    $nik = $_POST['nik'];
    $nisn = $_POST['nisn'];
    $agama = $_POST['AgamaSiswa'];
    $no_hp = isset($_POST['no_hp']) ? $_POST['no_hp'] : ''; 
    $jurusan1 = $_POST['Jurusan1'];
    $jurusan2 = $_POST['Jurusan2'];
    $jurusan3 = $_POST['Jurusan3'];
    $extra = isset($_POST['extra']) ? implode(', ', $_POST['extra']) : ''; 
    echo "<h2>Data Calon Siswa:</h2>";
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr><th>Field</th><th>Data</th></tr>";
    echo "<tr><td><strong>Nama Calon Siswa</strong></td><td>" . htmlspecialchars($nama) . "</td></tr>";
    echo "<tr><td><strong>Tempat Lahir</strong></td><td>" . htmlspecialchars($tmptlahir) . "</td></tr>";
    echo "<tr><td><strong>Jenis Kelamin</strong></td><td>" . htmlspecialchars($jenis_kelamin) . "</td></tr>";
    echo "<tr><td><strong>Alamat</strong></td><td>" . nl2br(htmlspecialchars($alamat)) . "</td></tr>";
    echo "<tr><td><strong>Tanggal Lahir</strong></td><td>" . htmlspecialchars($date) . "</td></tr>";
    echo "<tr><td><strong>NIK</strong></td><td>" . htmlspecialchars($nik) . "</td></tr>";
    echo "<tr><td><strong>NISN</strong></td><td>" . htmlspecialchars($nisn) . "</td></tr>";
    echo "<tr><td><strong>Agama</strong></td><td>" . htmlspecialchars($agama) . "</td></tr>";
    echo "<tr><td><strong>No. Handphone</strong></td><td>" . htmlspecialchars($no_hp) . "</td></tr>";
    echo "<tr><td><strong>Jurusan 1</strong></td><td>" . htmlspecialchars($jurusan1) . "</td></tr>";
    echo "<tr><td><strong>Jurusan 2</strong></td><td>" . htmlspecialchars($jurusan2) . "</td></tr>";
    echo "<tr><td><strong>Jurusan 3</strong></td><td>" . htmlspecialchars($jurusan3) . "</td></tr>";
    echo "<tr><td><strong>Ekstrakurikuler yang diminati</strong></td><td>" . htmlspecialchars($extra) . "</td></tr>";
    echo "</table>";
} else {
    echo "<p>Form belum disubmit.</p>";
}
?>
