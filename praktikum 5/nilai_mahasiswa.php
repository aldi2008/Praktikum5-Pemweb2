<h2>Form Nilai Ujian</h2>

<hr>

<form method="post" action="">
    <label for="nama">Nama:</label><br>
    <input type="text" id="nama" name="nama"><br>
    <label for="matkul">Mata Kuliah:</label><br>
    <select id="matkul" name="matkul">
        <?php
        // Daftar pilihan mata kuliah
        $mata_kuliah = array("Statistika", "Pemrogramman Web 2", "Basis Data", "Jaringan Komputer");

        // Membuat option untuk setiap mata kuliah dalam array
        foreach ($mata_kuliah as $mata_kuliah_item) {
            echo "<option value='" . $mata_kuliah_item . "'>" . $mata_kuliah_item . "</option>";
        }
        ?>
    </select><br>
    <label for="nilai">Nilai:</label><br>
    <input type="text" id="nilai" name="nilai"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<hr>

<?php
if (isset($_POST["submit"])) {
    require_once "class_nilaimahasiswa.php";

    // Set nilai properti pada objek dari nilai yang diisi pada form
    $nama = $_POST["nama"];
    $matkul = $_POST["matkul"];
    $nilai = $_POST["nilai"];

    // Buat objek baru dari class nilaimahasiswa
    $mahasiswa = new nilaimahasiswa($nama, $matkul, $nilai);

    echo "<h2>Hasil Nilai Mahasiswa</h2>";
    echo "<p>Nama: " . $mahasiswa->nama . "</p>";
    echo "<p>Mata Kuliah: " . $mahasiswa->matkul . "</p>";
    echo "<p>Nilai: " . $mahasiswa->nilai . "</p>";
    echo "<p>Hasil: " . $mahasiswa->hasil() . "</p>";
    echo "<p>Kelulusan: " . $mahasiswa->kelulusan() . "</p>";
}
?>