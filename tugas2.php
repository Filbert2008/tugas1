<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="" method="">
    <fieldset>
       <legend> <h2>Data Calon Siswa</h2> </legend>
       <p>Nama Calon Siswa : <input type="text" place holder="Nama"></p>
       <p>Tempat Lahir : <input type="text" place holder="Tempat Lahir"></p>
       <p>Jenis Kelamin : <input type="radio" name="jenis_kelamin"Laki-Laki
       <input type="radio" name="jenis_kelamin">perempuan
       </p>
       <textarea name="Alamat" id=""></textarea>
       <p>Tanggal Lahir : <input type="date"></p>
       <p>NIK : <input type="text" place holder="Nomor Induk Kependudukan"></p>
       <p>NISN : <input type="text" place holder="Nomor Induk Siswa Nasional"></p>
       <p>Agama : <select name="Agama Siswa" id="">
           <option value="islam">islam</option>
           <option value="Kristen">Kristen</option>
           <option value="Katolik">Katolik</option>
           <option value="Hindu">Hindu</option>
           <option value="Budha">Budha</option>
           <option value="Konghucu">Konghucu</option>
       </select></p>
       
       <p>No. Handphone : <input type="tel" place holder="No. Handphone Anda"></p>
   
   <p>Pilih Jurusan1 : <select name="Jurusan1" id="">
    <option value="PPLG">PPLG</option>
    <option value="TJKT">TJKT</option>
    <option value="DKV">DKV</option>
    <option value="SP">Seni Pertunjukan</option>
    <option value="AKEUL">AKL</option>
    <option value="MPLB">MPLB</option>
    <option value="PH">Perhotelan</option>
    <option value="PM">Pemasaran</option>
    <option value="BDP">BDP</option>
    <option value="KL">Kuliner</option>
       </select></p>
   <p>Pilih Jurusan2 : <select name="Jurusan2" id="">
          <option value="PPLG">PPLG</option>
    <option value="TJKT">TJKT</option>
    <option value="DKV">DKV</option>
    <option value="SP">Seni Pertunjukan</option>
    <option value="AKEUL">AKL</option>
    <option value="MPLB">MPLB</option>
    <option value="PH">Perhotelan</option>
    <option value="PM">Pemasaran</option>
    <option value="BDP">BDP</option>
    <option value="KL">Kuliner</option>
       </select></p>
   <p>Pilih Jurusan3 : <select name="Jurusan3" id="">
           <option value="PPLG">PPLG</option>
           <option value="TJKT">TJKT</option>
           <option value="DKV">DKV</option>
           <option value="SP">Seni Pertunjukan</option>
           <option value="AKEUL">AKL</option>
           <option value="MPLB">MPLB</option>
           <option value="PH">Perhotelan</option>
           <option value="PM">Pemasaran</option>
           <option value="BDP">BDP</option>
           <option value="KL">Kuliner</option>
       </select></p>
<label for="">
            pilih extra yang diminati
        </label>
        <label for="extra1">
            <input type="checkbox" name="extra[]" id="extra1" value="Pecinta Alam">
            Pecinta Alam
        </label>
        <input type="checkbox" name="extra[]" value="Dewan Ambalan">Dewan Ambalan
        <input type="checkbox" name="extra[]" value="OSIS">OSIS 
        <input type="checkbox" name="extra[]" value="Gerakan Disiplin Sekolah">Gerakan Disiplin Sekolah
        <input type="checkbox" name="extra[]" value="Laskar Hijau">Laskar Hijau 
        <input type="checkbox" name="extra[]" value=PMR>PMR
        <input type="checkbox" name="extra[]" value="Remaja Masjid">Remaja Masjid
        <input type="checkbox" name="extra[]" value="Teater Kusuma">Teater Kusuma
        <input type="checkbox" name="extra[]" value="Voli">Voli
        <input type="checkbox" name="extra[]" value="Basket">Basket
        <input type="checkbox" name="extra[]" value="Futsal">Futsal
        <input type="checkbox" name="extra[]" value="Paskibra">Paskibra
        <input type="checkbox" name="extra[]" value="Paskibra">english club
    </form>
</body>
</html>