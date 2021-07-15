<?php

// class 
class Orang
{
    // property
    public $nama = "Rizky";

    function setNama()
    {   // method 
        return "ini method";
    }
}
// instens
$orang = new Orang();
$orang2 = new Orang();

echo $orang->nama . "<br/>";
echo $orang2->setNama();
