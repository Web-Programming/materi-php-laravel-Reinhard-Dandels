<h2>Tabel perkalian untuk 1-5 📊</h2>

<?php
echo "<table border='1' cellpadding='10' style='border-collapse: collapse;'>";
echo "<tr><th>Kali Berapa</th><th>Hasilnya</th></tr>";

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        $hasil = $i * $j;
        echo "<tr><td>$i x $j</td><td>$hasil</td></tr>";
    }
}

echo "</table>";
?>
