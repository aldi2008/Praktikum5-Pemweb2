<?php

require_once "./class_mahasiswa.php";

$faiz = new Mahasiswa('02011', 'Faiz Fikri');
$alisa = new Mahasiswa('02012', 'Alissa Khairunnisa');
$rosa = new Mahasiswa('01011', 'Rosalie Naurah');
$defi = new Mahasiswa('01012', 'Defghi Muhammad');

$faiz->prodi = 'TI';
$faiz->thn_angkatan = '2012';
$faiz->ipk = '3.8';

$alisa->prodi = 'TI';
$alisa->thn_angkatan = '2012';
$alisa->ipk = '3.9';

$rosa->prodi = 'SI';
$rosa->thn_angkatan = '2010';
$rosa->ipk = '3.46';

$defi->prodi = 'SI';
$defi->thn_angkatan = '2010';
$defi->ipk = '3.2';

$ar_mahasiswa = [$faiz, $alisa, $rosa, $defi];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        border: 1px solid black;
        padding: 5px;
        text-align: center;
    }

    th {
        background-color: #ddd;
    }
</style>

<body>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Thn Angkatan</th>
                <th>IPK</th>
                <th>Predikat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($ar_mahasiswa as $mhs) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $mhs->nim ?></td>
                    <td><?= $mhs->nama ?></td>
                    <td><?= $mhs->prodi ?></td>
                    <td><?= $mhs->thn_angkatan ?></td>
                    <td><?= $mhs->ipk ?></td>
                    <td><?= $mhs->predikat_ipk() ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>