<?php
function palindrome_angka($angka) {
    // tulis kode di sini
    $wordLength = strlen($word);
    $newWord = "";
    for ($i = $wordLength - 1; $i >= 0; $i--){
        $newWord .= $word[$i];
        // echo $newWord;
    }
    if ($word === $newWord){
        echo "palindrome($word) => output : true <br>";
    }
    else{
        echo "palindrome($word) => output : false <br>";
  }
  
  // TEST CASES
  echo palindrome_angka(8) // 9
  echo palindrome_angka(10); // 11
  echo palindrome_angka(117); // 121
  echo palindrome_angka(175); // 181
  echo palindrome_angka(1000); // 1001




?>