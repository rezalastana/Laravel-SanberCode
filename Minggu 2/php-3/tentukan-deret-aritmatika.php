<?php
function tentukan_deret_aritmatika($arr) {
// kode di sini
$hasil = "";
for ($i=0; $i<count($arr); $i++) { 
    if (array_key_exists($i+1,$arr) == false) {
        break;
    } elseif (array_key_exists($i+2,$arr) == false) {
        break;}
    {
        if($arr[$i+1] - $arr[$i] == $arr[$i+2] - $arr[$i+1]) {
                $hasil  =   "true";
            } else {
                $hasil  =   "false";    
                break;
            }
    }
}
return $hasil."<br>";
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>