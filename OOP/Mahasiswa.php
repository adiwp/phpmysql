<?php

namespace OOP;

class Mahasiswa
{
    private $npm;
    private $nama;
    private $alamat;
    public function __construct($npm, $nama, $alamat){
        $this->npm = $npm;
        $this->nama = $nama;
        $this->alamat = $alamat;
    }

    public function getNama() {
        return $this->nama . "\n";
    }

    public function getNPM() {
        return $this->npm . "\n";
    }

    public function getAlamat() {
        return $this->alamat . "\n";
    }
}

$dodi = new Mahasiswa("4522001000", "Dodi Kurniawan", "Lenteng Agung");

echo $dodi->getNPM();
echo $dodi->getNama();
echo $dodi->getAlamat();