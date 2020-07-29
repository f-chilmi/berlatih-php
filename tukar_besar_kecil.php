<?php
// function tukar_besar_kecil($string){
//kode di sini
$str = "TesT eXampLe";
$str_implode = str_split($str);

$caps = true;
foreach($str_implode as $key=>$letter){
    if($caps){
        $out = strtoupper($letter);
        if($out <> " ") //not a space character
            $caps = false;
    }
    else{
        $out = strtolower($letter);
        $caps = true;
    }
    $str_implode[$key] = $out;
}

$str = implode('',$str_implode);

echo $str;
// for ($i = 0; $i < strlen($string); $i++){
//     $output = strtoupper(strtolower($string[$i]));
//     // echo $string[$i];
//     echo $output;
// }
// return $output;
// }

// // TEST CASES
// echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
// echo "<br>";
// echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
// echo "<br>";
// echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
// echo "<br>";
// echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
// echo "<br>";
// echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>