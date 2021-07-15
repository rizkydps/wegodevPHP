<?php

// class 
class Orang
{
    // property
    public $nama = "Rizky";
    public $umur = 1;

    function setUmur($parameterUmur)
    {   // this  di sini digunakan untuk mereferensikan dirinya sebagai instens
        $this->umur = $parameterUmur;
    }
    function getUmur()
    {
        return $this->umur;
    }
}
// instens
$orang = new Orang();
$orang->setUmur(10);

echo $orang->getUmur();
