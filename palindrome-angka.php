<?php
function palindrome_angka($angka) {
    // tulis kode di sini
    $stringNumber = strval($angka);
    $result = "";
    $reverseString = "";

    for ($i = strlen($stringNumber) - 1; $i >= 0; $i--){
        $reverseString .= $stringNumber;
    }

    if ($reverseString == $stringNumber){
        $angka += 1;
    }
    while (true){
        for($i = strlen($stringNumber) - 1; $i >= 0; $i--){
            $reverseString .= $stringNumber;
        }
        if ($reverseString == $stringNumber){
            global $result;
            $result = $stringNumber . "<br>";
            return $result;
        }
        else {
            $angka += 1;
        }
    }
}

  // TEST CASES
  echo palindrome_angka(8); // 9
  echo palindrome_angka(10); // 11
  echo palindrome_angka(117); // 121
  echo palindrome_angka(175); // 181
  echo palindrome_angka(1000); // 1001




?>