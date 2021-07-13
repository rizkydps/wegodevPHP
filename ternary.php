<?php

$a = 10;
$txt = "";

// Memeriksa apakah nilai a tidak sama dengan nilai 10
// bila nilai a ridak sama maka akan mencetak "Nilai a tidak sams dengan nilai 10"

$a != 10 ? $txt = "Nilai a tidak sams dengan nilai 10" : $txt = "Nilai a sama dengan nilai 10";

echo $txt;

// jika $a true cetak "Nilai a tidak sama dengan nilai 10"
// jika $a false cetak "Nilai a sama dengan nilai 10"