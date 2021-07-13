<?php

function aritmatika($nilai1, $nilai2, $tugas)
{
    if ($tugas == "+") {
        $hasil = $nilai1 + $nilai2;
    }
    if ($tugas == "-") {
        $hasil = $nilai1 - $nilai2;
    }
    if ($tugas == "*") {
        $hasil = $nilai1 * $nilai2;
    }
    if ($tugas == "/") {
        $hasil = $nilai1 / $nilai2;
    }
    return $hasil;
}

echo aritmatika(7, 2, "+");
echo "<br/>";
echo aritmatika(5, 2, "-");
echo "<br/>";
echo aritmatika(5, 5, "*");
echo "<br/>";

// contoh lain
$ininilainya1 = 5;
$ininilainya2 = 5;
$tugasnya = "/";
echo aritmatika($ininilainya1, $ininilainya2, $tugasnya);
