<?php
$ar_buah = ["pepaya","mangga","pisang","jambu"];
// cetak buah index ke 1 yaitu mangga;
echo $ar_buah[1];
// cetak jumlah buah
echo '<br>jumlah buah ' . count($ar_buah);
// cetak seluruh nama buah
echo '<ol>';
foreach ($ar_buah as $buah){
    echo "<li>$buah</li>";
}
echo "</ol>";
//tambahkan buah
$ar_buah [] = "Durian";
// menghapus buah index ke 1
unset ($ar_buah[1]);
// rubah buah index 2 menjadi manggis
$ar_buah[2] = "manggis";
//cetak seluruh buah dengan index nya
echo "<ul>";
foreach ($ar_buah as $k => $v) {
    echo "<li> buah index ke - $k adalah $v </li>";
}
echo "</ul>";
?>