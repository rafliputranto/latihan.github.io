<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 8</title>
<style>
h1{
    text-align: center;
}
</style>
</head>
<body>
<h1>TUGAS 8</h1>
<?php
// Juara PIM
$spp = 3000000;
$juara = 3;

if($juara > 3){
    $diskon = "25%";
    $hasil = $spp * 25 / 100 ;
    $total = $spp - $hasil;
}elseif($juara > 2){
    $diskon = "50%";
    $hasil = $spp * 50 /100 ;
    $total = $spp - $hasil;
}elseif($juara > 1){
    $diskon = "75%";
    $hasil = $spp * 75 /100 ;
    $total = $spp - $hasil;
}else{
    $diskon = "100%";
    $hasil = $spp - $spp ;
    $total = $hasil;
}
echo "Jika seseorang mahasiswa/i mendapatkan juara ".$juara." di PIM, Mereka akan mendapatkan <b>Diskon</b> sebesar " .$diskon." Sehingga dia hanya membayar <b>SPP</b> sebesar :";
echo "&nbsp Rp.".number_format($total)."";
?>

<?php
// Diskon Belanja di Pasar
echo "<hr>";
$gaji = 6000000;
$pasar = true;
$anak = false;

if($gaji > 1000000){
     if($pasar){
         $hasil = $gaji * 5 / 100;
     }else{
         $hasil = "0";
     }
}

if($gaji >= 5000000){
    if($pasar){
        $hasil = $gaji * 20 / 100;
    }else{
        $hasil = "0";
    }
    if($anak){
        $hasil = $hasil * 5 / 100;
    }
}
echo "Jika seseorang karyawan memiliki <b>Gaji</b> ".number_format($gaji). " Dan belanja di pasar, Mereka akan mendapatkan <b>Potongan</b> harga sebesar : Rp. ".number_format($hasil);
?>
</body>
</html>