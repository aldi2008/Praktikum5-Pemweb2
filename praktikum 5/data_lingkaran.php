 <?php


    require_once "class_lingkaran.php";

    echo "NILAI PHI " . Lingkaran::PHI;

    $lingkar1 = new Lingkaran(10);
    $lingkar2 = new Lingkaran(7);

    echo "<br/>Luas Object lingkaran1 " . $lingkar1->getLuas();
    echo "<br>Luas Object lingkaran 2 " . $lingkar2->getLuas();

    echo "<br>Keliling Object Lingkaran 1 " . $lingkar1->getKeliling();
    echo "<br>Keliling Object Lingkaran 2 " . $lingkar2->getKeliling();
    ?>