Jika seseorang memiliki uang sebesar Rp. 1.586.000,- dan ingin memecahkan uang tersebut
menjadi pecahan Rp.100.000,-; Rp.50.000,-; Rp.20.000,-; Rp.10.000,-; Rp.5.000,- dan Rp.1.000.
Dengan menggunakan script PHP, tentunkan banyaknya masing-masing uang pecahan yang
diproleh orang tersebut.

<?php

$uang = 1586000;
$pecahan = array(100000, 50000, 20000, 10000, 5000, 1000);
$jumlah = array(0, 0, 0, 0, 0, 0);
echo "Uang yang akan dipecah : Rp. " . $uang . "<br>";

for ($i = 0; $i < count($pecahan); $i++) {
    while ($uang >= $pecahan[$i]) {
        $uang -= $pecahan[$i];
        $jumlah[$i]++;
    }
    echo "Pecahan uang Rp. " . $pecahan[$i] . " sebanyak " . $jumlah[$i] . " lembar <br>";
}
?>
//Soal 5 menggunakan PHP sebagai bahasa yang digunakan dan dikerjakan selama 15 menit