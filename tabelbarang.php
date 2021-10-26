<?php

$kangkung = [1,"Kangkung", 10, 10*1000, 10*1000000, 50];
$bayam = [2,"Bayam", 10, 10*1000, 10*1000000, 100];
$terong = [3,"Terong", 21, 21*1000, 21*1000000, 15];
$jagung = [4,"Jagung", 20, 20*1000, 20*1000000, 0];
$mentimun = [5,"Mentimun", 30, 30*1000, 30*1000000, 20];
$paprika = [6, "Paprika", 19, 19*1000, 19*1000000, 50];
$bawangMerah = [7,"Bawang Merah", 5, 5*1000, 5*1000000, 0];
$brokoli = [8,"Brokoli", 30, 30*1000, 30*1000000, 100];
$wortel = [9,"Wortel", 14, 14*1000, 14*1000000, 15];
$kentang = [10,"Kentang", 20, 20*1000, 20*1000000, 0];
$bawangPutih = [11,"Bawang Putih", 30, 30*1000, 30*1000000, 20];
$bawangBombay = [12, "Bawang Bombay", 15, 15*1000, 15*1000000, 50];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Barang</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet">

</head>
<body>
<h1>Konversi Berat Sayur Pak Joy</h1>
<table>
  <thead>
    <tr>
      <th>No.</th>
      <th>Nama Barang</th>
      <th>Berat (kg)</th>
      <th>Berat (g)</th>
      <th>Berat (mg)</th>
      <th>Stok</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php for($i=0;$i<6;$i++){ ?>
            <td> <?php echo $kangkung[$i] ?></td> 
        <?php } ?>  
    </tr>
    <tr>
    <?php for($i=0;$i<6;$i++){ ?>
            <td> <?php echo $bayam[$i] ?></td> 
        <?php } ?> 
    </tr>
    <tr>
    <?php for($i=0;$i<6;$i++){ ?>
            <td> <?php echo $terong[$i] ?></td> 
        <?php } ?>
    </tr>
    <tr>
    <?php for($i=0;$i<6;$i++){ ?>
                <?php if($jagung[$i] == 0){ ?>
                    <td id=stokKosong> <?php echo "kosong" ?> </td> 
                <?php }else{ ?>
                    <td> <?php echo $jagung[$i] ?> </td>
            <?php } ?>
        <?php } ?>
    </tr>
    <tr>
    <?php for($i=0;$i<6;$i++){ ?>
            <td> <?php echo $mentimun[$i] ?></td> 
        <?php } ?>
    </tr>
    <tr>
    <?php for($i=0;$i<6;$i++){ ?>
            <td> <?php echo $paprika[$i] ?></td> 
        <?php } ?>
    </tr>
    <tr>
    <?php for($i=0;$i<6;$i++){ ?>
                <?php if($bawangMerah[$i] == 0){ ?>
                    <td id=stokKosong> <?php echo "kosong" ?> </td> 
                <?php }else{ ?>
                    <td> <?php echo $bawangMerah[$i] ?> </td>
            <?php } ?>
        <?php } ?>
    </tr>
    <tr>
    <?php for($i=0;$i<6;$i++){ ?>
            <td> <?php echo $brokoli[$i] ?></td> 
        <?php } ?>
    </tr>
    <tr>
    <tr>
    <?php for($i=0;$i<6;$i++){ ?>
            <td> <?php echo $wortel[$i] ?></td> 
        <?php } ?>
    </tr>
    <tr>
    <?php for($i=0;$i<6;$i++){ ?>
                <?php if($kentang[$i] == 0){ ?>
                    <td id=stokKosong> <?php echo "kosong" ?> </td> 
                <?php }else{ ?>
                    <td> <?php echo $kentang[$i] ?> </td>
            <?php } ?>
        <?php } ?>
    </tr>
    <tr>
    <?php for($i=0;$i<6;$i++){ ?>
            <td> <?php echo $bawangPutih[$i] ?></td> 
        <?php } ?>
    </tr>
    <tr>
    <?php for($i=0;$i<6;$i++){ ?>
            <td> <?php echo $bawangBombay[$i] ?></td> 
        <?php } ?>
    </tr>
  </tbody>
</table>
</body>
</html>