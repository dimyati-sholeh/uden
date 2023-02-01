<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
      $merk_motor = "Honda Vario 125cc 2020";

      if ($merk_motor == "Yamaha mio 2019") {
          $harga = "Rp. 16.000.000,-";
      } else if ($merk_motor == "Yamaha Jupiter MX 2014") {
          $harga = "Rp. 11.000.000,-";
      } else if ($merk_motor == "Honda Vario 125cc 2020") {
          $harga = "Rp. 18.000.000,-";
      } else if ($merk_motor == "Honda Supra 125 2015") {
          $harga = "Rp. 10.000.000,-";
      } else if ($merk_motor == "Honda PCX 150cc 2018") {
          $harga = "Rp. 23.000.000,-";
      } else {
          $harga = "kosong";
      }
      
      echo ("harga motor ". $merk_motor." adalah $harga");
    ?> 
</body>
</html>