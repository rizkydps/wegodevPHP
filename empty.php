<?php

// empty digunakan untuk menecek  apabila variable tidak memiliki nilai, jika variable tidak memiliki nilai makan bernilai TRUE

$buah = "Apel";
$minuman = "Kopi";
$makanan;


echo "Hasil variable buah : " . empty($buah); //  output FALSE karena variable buah sebenarnya memiliki nilai namun di cek pakai empty tanpa tanda !
echo "<br/>";
echo "Hasil variable makanan : " . empty($makanan); // output TRUE karena tidak memiliki nilai namun di cek pakai empty tanpa tanda !
echo "<br/>";
echo "Hasil variable minuman :" . !empty($minuman); // tanda ! untuk mengecek apabila variable $minuman memiliki sebuah nilai 
// output TRUE karena memiliki nilai dan di cek pakai empty menggunakan tanda !
