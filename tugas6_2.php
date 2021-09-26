<?php

$hargaJambu = 15000; // perkilo
$stokToko = 6; // dus
$isiDus = 5; // kilogram
$hargaKardus = 2000; // dua dus
// Total penjualan jambu + Dus

// penyelesaian
$hasilJambu = ($stokToko * $isiDus) * $hargaJambu;
$hasilKardus = $stokToko / 2 * $hargaKardus;

$total = $hasilJambu + $hasilKardus;

echo "Harga Jambu = Rp. ". $hargaJambu . "/Kg";
echo "<br/>";
echo "Harga Jambu = Rp. ". $hargaKardus . "/Kg";
echo "<br/>";
echo "Total Penjualan (Dus dan Jambu) = Rp. ". $total;