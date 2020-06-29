<?php

function palindrome_angka($angka) {
  // tulis kode di sini
  if(0 <= $angka && $angka <= 9) {
    if(($angka + 1) < 10) {
      return $angka + 1 . "<br>";
    }
  }

  while(!is_palindrome($angka)){
    $angka++;
  }
  echo "$angka<br>";
}

function is_palindrome($num){
    $numString = "$num";
    $len = strlen($numString);
        for ($i=0; $i < $len/2; $i++) { 
            # code...
            if($numString[$i] !== $numString[$len-$i-1]){
                return false;
            }
        }
        return true;
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(11);
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>