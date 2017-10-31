<?php
require_once 'orang1.php';


$orang = new orang('laela','bandung','XI-RPL1','pelajar','sayuran');

echo "namanya...     ".$orang->get_nama();
echo"</br>";
echo "tempatlahir...     ".$orang->get_tempatlahir();
echo"</br>";
echo "kelas...     ".$orang->get_kelas();
echo"</br>";
echo "status...    ".$orang->get_status();
echo"</br>";
echo "alamat...    ".$orang->get_alamat();
echo"</br>";
?>