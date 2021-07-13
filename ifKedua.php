<?php

$a = 10;
$b = 20;
$c = 30;
$d = 10;

if ($a == $d and $b < $c) { // and bisa di ganti dengan tanda && // and harus 2 2nya true jika output ingin true
    echo "Nilai $a sama dengan nilai $d dan nilai $b lebih kecil dari nilai $c";
} else {
    echo "Nilai $a tidak sama dengan nilai $d dan nilai $b tidak lebih kecil dari nilai $c";
}

echo "<br/>";

if ($a == $d or $d > $c) { // OR bisa diganti dengan tanda || // jika salah 1 true maka output true
    echo "Nilai $a sama dengan nilai $d dan nilai $d tidak lebih besar dari nilai $c";
} else {
    echo "Nilai $a tidak sama dengan nilai $b dan nilai $d lebih kecil dari nilai $c";
}
