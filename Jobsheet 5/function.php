<?php
//4.1
// function perkenalan(){
//     echo "Assalamualaikum, ";
//     echo "Perkenalkan, nama saya Titania <br/>";
//     echo "Senang berkenalan dengan Anda <br/>";
// }
// //memanggil fungsi
// perkenalan();
// perkenalan();

//4.2 4.3
function perkenalan($nama, $salam = "Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama." <br/>";
    echo "Senang berkenalan dengan Anda <br/>";
}

//memanggil fungsi
perkenalan("Rosyid", "Haii");
echo "<br>";

$saya = "Roxc";
$ucapanSalam = "Morningg";

// //memanggil lagi
perkenalan($saya);
?>