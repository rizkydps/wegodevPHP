<?php

$nilai = 80;

switch ($nilai) {
    case  50:
        echo "Nilai Kamu C";
        break;
    case  70:
        echo "Nilai Kamu B";
        break;
    case 80:
        echo "Nilai Kamu A";
        break;
    default:
        echo "Kamu tidak ada nilai";
        break;
}
echo "<br/>";

$level = "Master";

switch ($level) {
    case "Beginer":
        echo "Kamu cupu";
        break;
    case "Master";
        echo "lumayan Jago";
        break;
    case "Glory";
        echo "Proplayer";
        break;
    default:
        echo "Kamu belum main";
        break;
}
