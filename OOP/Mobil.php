<?php

namespace OOP;

class Mobil
{
    // atribut
    public $warna;

    // method
    public function tampilkanWarna() {
        echo $this->warna . "\n";
    }
}

$velozMerah = new Mobil();  // proses instantiation ==> pembuatan object
$velozMerah->warna = "Merah";

$velozBiru = new Mobil();   // proses instantiation ==> pembuatan object
$velozBiru->warna = "Biru";

$velozBiru->tampilkanWarna();
$velozMerah->tampilkanWarna();

/* OOP
 * Encapsulation = Pembungkusan?
 * Data dan Method ke dalam class
 * class Mobil --> class Mobil adalah blueprint atau rancangan
 * bikin objek dari class Mobil --> instantiation (instansiasi)
 *
 * bikin objek velozMerah
 * bikin objek velozBiru
 * bikin objek katanaHitam
 * bikin objek carryPutih
 */