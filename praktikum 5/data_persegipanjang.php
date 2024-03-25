<?php

require_once "class_persegipanjang.php";

$persegipanjang1 = new Persegi_Panjang(10, 20);
$persegipanjang2 = new Persegi_Panjang(5, 10);

echo "Luas Persegi Panjang : " . $persegipanjang1->getLuas();
echo "<br>keliling Persegi Panjang : " . $persegipanjang2->getKeliling();
