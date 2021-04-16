<html>
<head><title>Contoh Penggunaan UDF</title></head>
<body>
<!-- Menentukan Form Input-->
<form action="Pert8_lat2.php" method="POST">
Masukkan Bilangan Pertama : <br>
<input type="text" name="Pertama" size=10><br>
Masukkan Bilangan Kedua : <br>
<input type="text" name="Kedua" size=10><br>
<input type="submit" value="hitung">
</form>
<!--membandingkan 2 buah bilangan yang diinput-->
<?php
$a = $_POST['Pertama'];
$b = $_POST['Kedua'];
Function jumlah($a,$b)
{
$jumlahbil=$a + $b;
Return $jumlahbil;
}
Function kurang($a,$b)
{
$kurangbil=$a - $b;
Return $kurangbil;
}
Function kali($a,$b)
{
$kalibil=$a * $b;
Return $kalibil;
}
Function bagi($a,$b)
{
$bagibil= $a / $b;
Return $bagibil;
}
Echo "<br>";
Echo ("Bilangan Pertama : ");
Echo $a;
Echo "<br>";
Echo ("Bilangan Kedua : ");
Echo $b;
Echo "<br><br>";
Echo "Hasil Penjumlahan 2 buah bilangan ";
Echo "<br>";
$jumlahbil = jumlah($a,$b);
Printf( "Penjumlahan antara : %d + %d = %d ",$a,$b,$jumlahbil);
Echo "<br><br>";
Echo "Hasil Pengurangan 2 buah bilangan ";
Echo "<br>";
$kurangbil= kurang($a,$b);
Printf( "Pengurangan antara : %d - %d = %d ",$a,$b,$kurangbil);
Echo "<br><br>";
Echo "Hasil Perkalian 2 buah bilangan ";
Echo "<br>";
$kalibil= kali($a,$b);
Printf( "Perkalian antara : %d * %d = %d ", $a, $b, $kalibil);
Echo "<br><br>";
Echo "Hasil Pembagian 2 buah bilangan ";
Echo "<br>";
$bagibil= bagi($a,$b);
Printf( "Pembagian antara : %d / %d = %d ",$a,$b,$bagibil);
Echo "<br><br>";
?>
</body>
</html>