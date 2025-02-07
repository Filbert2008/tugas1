<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<style>
    body {
        transition: background-color 0.1s;
    }
</style>
<body id="body">
    <form action="proses.php" method="POST">
    <fieldset>
       <legend> <h2>Data Calon Siswa</h2> </legend>
       <p>Nama Calon Siswa : <input type="text" placeholder="Nama" name="nama"></p>
       <p>Tempat Lahir : <input type="text" placeholder="Tempat Lahir" name="tmptlahir"></p>
       <p>Jenis Kelamin : <input type="radio" name="jenis_kelamin"/>Laki-Laki
       <input type="radio" name="jenis_kelamin">perempuan
       </p>
       <label for="Alamat">Alamat</label>
       <textarea name="Alamat" id=""></textarea>
       <p>Tanggal Lahir : <input type="date" name="date"/></p>
       <p>NIK : <input type="text" placeholder="Nomor Induk Kependudukan" name="nik"></p>
       <p>NISN : <input type="text" placeholder="Nomor Induk Siswa Nasional" name="nisn"></p>
       <p>Agama : <select name="AgamaSiswa" id="">
           <option value="islam">islam</option>
           <option value="Kristen">Kristen</option>
           <option value="Katolik">Katolik</option>
           <option value="Hindu">Hindu</option>
           <option value="Budha">Budha</option>
           <option value="Konghucu">Konghucu</option>
       </select></p>
       
       <<p>No. Handphone: <input type="tel" placeholder="No. Handphone Anda" name="no_hp"></p>

   
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

<div class="checkbox-group">
    <label for="extra1">
        <input type="checkbox" name="extra[]" id="extra1" value="Pecinta Alam"> Pecinta Alam
    </label> <br>
    <label for="extra2">
        <input type="checkbox" name="extra[]" id="extra2" value="Dewan Ambalan"> Dewan Ambalan
    </label><br>
    <label for="extra3">
        <input type="checkbox" name="extra[]" id="extra3" value="OSIS"> OSIS
    </label><br>
    <label for="extra4">
        <input type="checkbox" name="extra[]" id="extra4" value="Gerakan Disiplin Sekolah"> Gerakan Disiplin Sekolah
    </label><br>
    <label for="extra5">
        <input type="checkbox" name="extra[]" id="extra5" value="Laskar Hijau"> Laskar Hijau
    </label><br>
    <label for="extra6">
        <input type="checkbox" name="extra[]" id="extra6" value="PMR"> PMR
    </label><br>
    <label for="extra7">
        <input type="checkbox" name="extra[]" id="extra7" value="Remaja Masjid"> Remaja Masjid
    </label><br>
    <label for="extra8">
        <input type="checkbox" name="extra[]" id="extra8" value="Teater Kusuma"> Teater Kusuma
    </label><br>
    <label for="extra9">
        <input type="checkbox" name="extra[]" id="extra9" value="Voli"> Voli
    </label><br>
    <label for="extra10">
        <input type="checkbox" name="extra[]" id="extra10" value="Basket"> Basket
    </label><br>
    <label for="extra11">
        <input type="checkbox" name="extra[]" id="extra11" value="Futsal"> Futsal
    </label><br>
    <label for="extra12">
        <input type="checkbox" name="extra[]" id="extra12" value="Paskibra"> Paskibra
    </label><br>
    <label for="extra13">
        <input type="checkbox" name="extra[]" id="extra13" value="english club"> English Club
    </label><br><br><br>
</div>

        <button type="submit" name="btnsubmit">submit</button>
        </fieldset>
        
    </form>
    
</body>
</html>