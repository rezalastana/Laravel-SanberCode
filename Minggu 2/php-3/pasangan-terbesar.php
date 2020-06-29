<?php
function pasangan_terbesar($angka){
// kode di sini
$pasangan_terbesar = 0;

for ($i=0; $i<strlen($angka) ; $i++) { 
    $temp = substr($angka,$i,2);
    if($pasangan_terbesar>$temp) {
        $pasangan_terbesar = $pasangan_terbesar;
    } else {
        $pasangan_terbesar = $temp;
    }
}
return "$pasangan_terbesar <br>";
}
// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>