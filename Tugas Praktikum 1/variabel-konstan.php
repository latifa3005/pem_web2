<?php
//definisikan konstanta
define ('PHI' , '3.14');
define ('DBNAME' , 'inventori');
define ('DBSERVER' , 'localhost');

$jari = 8;
$luas = PHI * $jari * $jari;
$k11 = 2 * PHI * $jari;

echo " luas lingkaran dengan jari jari $jari : $luas";
echo "<br>kelilingnya : $k11 ";
?>
<hr/>
<?php
echo 'nama Databasenya : ' .DBNAME;
echo '<br>Lokasi databasenya ada di ' .DBSERVER;
?>