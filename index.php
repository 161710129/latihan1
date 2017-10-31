<?php

require_once 'beca.php';

$beca1 = new beca('ngik ngik ngok',20);
$beca2 = new beca('titut titut',30);

$beca1->set_berat(30);


echo "1. Berapa jumlah roda Beca : " .$beca1->get_roda(). '<br>';
echo "2. Berat beca adalah : " .$beca1->get_berat(). ' Kg';
?>