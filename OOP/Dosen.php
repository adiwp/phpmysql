<?php

namespace OOP;

use OOP\Karyawan;

class Dosen extends Karyawan
{
    public function kerja()
    {
        echo $this->nama . " sedang mengajar\n";
    }
}