<?php

namespace OOP;

class Karyawan
{
    protected $nik;
    protected $nama;
    protected $email;

    public function __construct($nik, $nama, $email) {
        $this->nik = $nik;
        $this->nama = $nama;
        $this->email = $email;
    }

    public function kerja() {
        echo $this->nama . " sedang bekerja\n";
    }
}