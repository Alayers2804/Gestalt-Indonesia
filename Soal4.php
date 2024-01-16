<!-- 4. Lakukanlan sebuah perulangan dengan variable array sebagai berikut :

$datadiri = array(
"Bimo Nasuti" => array(
"mob" => "654544455",
"email" => "bimonasuti@gmail.com",
"hp" => "08123456787",
),
"Bimo Nasuti" => array(
"mob" => "1231354897",
"email" => "bombomi@gmail.com",
),
"Yuni Salam" => array(
"mob" => "512512662",
"email" => "yunisalam@gmail.com",
"hp" => "08123456787",
)
);
dengan syarat data tanpa nomor handphone dimunculkan dengan label "Tidak Memiliki No
Handphone". -->


<?php

$datadiri = array(
    "Bimo Nasuti" => array(
        "mob" => "654544455",
        "email" => "bimonasuti@gmail.com",
        "hp" => "08123456787",
    ),
    "Bombomi" => array(
        "mob" => "1231354897",
        "email" => "bombomi@gmail.com",
    ),
    "Yuni Salam" => array(
        "mob" => "512512662",
        "email" => "yunisalam@gmail.com",
        "hp" => "08123456787",
    )
);

foreach ($datadiri as $key => $value) {
    if (!isset($value["hp"])) {
        echo $key . " Tidak Memiliki No Handphone<br>";
    } else {
        echo $key . " " . $value["hp"] . "<br>";
    }
}
?>

<!-- soal no 4 menggunakan php sebagai bahasa dasarnya dan dikerjakan selama 10 menit -->