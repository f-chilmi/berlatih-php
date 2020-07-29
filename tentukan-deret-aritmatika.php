<?php
function tentukan_deret_aritmatika($arr) {
// kode di sini
    
    for ( $i = sizeof($arr) - 1; $i > 0; $i--){      
    
        if(sizeof($arr) - 2 >= 0){
            $perbandinganKesatu = $arr[$i] - $arr[$i-1];
            $perbandinganKedua = $arr[$i-1] - $arr[$i-2];
            if ($perbandinganKesatu === $perbandinganKedua){            
                echo "true<br>";
            }
            else echo "false<br>";
        }
    }
    
    
}


// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>