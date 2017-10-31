<?php
require_once 'penjumlahan.php';


$penjumlahan = new penjumlahan;
$penjumlahan->set_penjumlahan(21,3);
echo "====================== <br>";
echo "Perhitungan bilangan 21 dengan bilangan 3<br>";
echo "====================== <br>";
echo "penjumlahan = ".$penjumlahan->get_penjumlahan();
echo"</br>";
?>

<?php
require_once 'pengurangan.php';

$pengurangan = new pengurangan;
$pengurangan->set_pengurangan(21,3);
echo "pengurangan = ".$pengurangan->get_pengurangan();
echo"</br>";
?>

<?php
require_once 'perkalian.php';

$perkalian = new perkalian;
$perkalian->set_perkalian(21,3);
echo "perkalian = ".$perkalian->get_perkalian();
echo"</br>";
?>

<?php
require_once 'pembagian.php';

$pembagian = new pembagian;
$pembagian->set_pembagian(21,3);
echo "pembagian = ".$pembagian->get_pembagian();
echo"</br>";
?>