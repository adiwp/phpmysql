<?php

include_once 'Karyawan.php';
include_once 'Dosen.php';

$ridho = new \OOP\Karyawan("123", "Ridho Alamsyah", "ridho@up.ac.id");
$melan = new \OOP\Karyawan("124", "Melan Nuraini", "melan@up.ac.id");

$adi = new \OOP\Dosen("221", "Adi Wahyu", "adi.wp@up.ac.id");
$amir = new \OOP\Dosen("222", "Amir Murtako", "amir@up.ac.id");

$ridho->kerja();
$melan->kerja();

$adi->kerja();
$amir->kerja();