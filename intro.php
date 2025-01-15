<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 define( "gaji",5000000);
 define("bonus",500000);
 define("pajak",0.12);

 function inputidentitas($nama,$tgsdn){
      $sblmppn = 0;
      $ssdhppn = 0;
      $ppn = 0;

      $sblmppn = bonus * $tgsdn;
      $sblmppn = $sblmppn + gaji;
      $ppn = $sblmppn*pajak;
      $ssdhppn = $sblmppn - ($sblmppn*pajak);

      echo "nama pekerja :". $nama ."<br/>";
      echo "jumlah tugas(proyek) yang telah selesai :". $tgsdn ."<br/>";
      echo "pendapatan ". $nama ."keseluruhan adalah : Rp". number_format($ssdhppn)."<br/>";
      echo "dengan ppn : Rp". number_format($ppn);
      echo "<br/>";
      echo "<br/>";


 }

 inputidentitas("cimeng",8)
    ?>
</body>
</html>