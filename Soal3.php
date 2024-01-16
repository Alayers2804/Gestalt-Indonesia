// Hitunglah perbedaan tanggal antara "2008-03-24" dan "2010-06-26" menggunakan PHP dengan
// contoh hasil keluaran sebagai berikut :
// - 2 tahun, 3 bulan, 4 hari

// Jawaban :

<?php

$date1 = new DateTime("2008-03-24");
$date2 = new DateTime("2010-06-26");

$diff = $date1->diff($date2);

echo $diff->y . " tahun, " . $diff->m . " bulan, " . $diff->d . " hari";

?>

// Soal 3 dikerjakan selama 2 menit dan menggunakan bahasa pemrograman PHP