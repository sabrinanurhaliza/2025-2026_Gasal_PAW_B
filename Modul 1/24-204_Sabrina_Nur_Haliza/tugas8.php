<?php
$teks = "halo dunia";

echo "panjang string: " . strlen($teks) . "<br>";
echo "jumlah kata: " . str_word_count($teks) . "<br>";
echo "string terbalik: " . strrev($teks) . "<br>";
echo "posisi 'PHP': " . strpos($teks, "PHP") . "<br>";
echo "ganti kata: " . str_replace("PHP", "Program", $teks) . "<br>";
?>
