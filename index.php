<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Aplikasi PHP Sederhana</title>
</head>
<body>
    <h1> Aplikasi PHP Sederhana </h1>

    <!-- Menghitung Umur -->
    <h2>1. Hitung Umur</h2>
    <form method="post">
        Masukkan Tanggal Lahir: <input type="date" name="tgl_lahir">
        <button type="submit" name="cek_umur">Cek Umur</button>
    </form>
    <?php
    if (isset($_POST['cek_umur'])) {
        $lahir = new DateTime($_POST['tgl_lahir']);
        $sekarang = new DateTime();
        $umur = $sekarang->diff($lahir)->y;
        echo "<p>Umur kamu sekarang: <strong>$umur tahun</strong></p>";
    }
    ?>

    <!-- Konversi USD ke IDR -->
    <h2>2. Konversi Dollar ke Rupiah</h2>
    <form method="post">
        Masukkan Jumlah USD: <input type="number" name="jumlah_usd">
        <button type="submit" name="konversi_uang">Konversi</button>
    </form>
    <?php
    if (isset($_POST['konversi_uang'])) {
        $usd = $_POST['jumlah_usd'];
        $kurs = 16000;
        $hasil = $usd * $kurs;
        echo "<p>$usd USD = Rp " . number_format($hasil, 0, ',', '.') . "</p>";
    }
    ?>

    <!-- Celsius ke Fahrenheit -->
    <h2>3. Konversi Suhu</h2>
    <form method="post">
        Suhu dalam Celsius: <input type="number" name="suhu_c">
        <button type="submit" name="konversi_suhu">Ubah ke Fahrenheit</button>
    </form>
    <?php
    if (isset($_POST['konversi_suhu'])) {
        $c = $_POST['suhu_c'];
        $f = ($c * 9/5) + 32;
        echo "<p>$c &deg;C = $f &deg;F</p>";
    }
    ?>

    <!-- Menghitung Luas Lingkaran -->
    <h2>4. Luas Lingkaran</h2>
    <form method="post">
        Jari-jari (r): <input type="number" name="jari_jari">
        <button type="submit" name="hitung_lingkaran">Hitung Luas</button>
    </form>
    <?php
    if (isset($_POST['hitung_lingkaran'])) {
        $r = $_POST['jari_jari'];
        $luas = 3.14 * $r * $r;
        echo "<p>Luas lingkaran dengan jari-jari $r adalah: <strong>$luas</strong></p>";
    }
    ?>
</body>
</html>
