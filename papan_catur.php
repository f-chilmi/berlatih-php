<?php

function papan_catur($angka) {
// tulis kode di sini
for($n = 0; $n < $angka; $n++) {
    for($m = 0; $m < ($angka*2) - 1; $m++) {
        
        if($n % 2 == 1 && $m % 2 == 1) {
            echo " #&nbsp";
        }
        else if ($n % 2 == 0 && $m % 2 == 0){
            echo " #&nbsp";
        }
        else {
            echo "&nbsp";
        }
        // echo "<br>";
        }
        echo "<br>";
    }
}

// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */
echo "<br>";

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
 */
echo "<br>";

echo papan_catur(5) ;
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/
echo "<br>";

?>