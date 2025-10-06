<?php
$menu = [
    "Nasi Goreng" => 15000,
    "Mie Ayam"    => 12000,
    "Es Teh"      => 5000
];

$pembelian = [
    "Nasi Goreng" => 2, 
    "Es Teh"      => 1  
];

$total = 0;
foreach ($pembelian as $item => $jumlah) {
    $subtotal = $menu[$item] * $jumlah;
    echo "$item ($jumlah x Rp{$menu[$item]}) = Rp$subtotal<br>";
    $total += $subtotal;
}

echo "<br>";
echo "Total yang harus dibayar: <b>Rp$total</b>";
?>
