<?php

function papan_catur($angka) {
// tulis kode di sini
	for ($i=1; $i <= $angka; $i++) { 
		if ($i%2==0) {
			echo "";
			for ($j=1; $j <=$angka ; $j++) { 
				echo "&nbsp;#";
			}
		}
		else{
			for ($j=1; $j <= $angka ; $j++) { 
				echo "#&nbsp";
			}
		}
		echo "<br>";
	}

	// for ($i=0; $i < $angka; $i++) { 
	// 	for ($j=0; $j < ($angka*2)-1; $j++) { 
	// 		if ($j%2 == 1 && $i%2 == 1) {
	// 			echo "#";
	// 		}
	// 		else if ($j%2 == 0 && $i%2 == 0) {
	// 			echo " #";
	// 		}
	// 		else{
	// 			echo " ";
	// 		}
	// 		echo "<br>";
	// 	}
	// }

	// for ($i=1; $i <= $angka; $i++) { 
	// 	$angka .= "";
	// 	for($j = 1; $j <= $angka; $j++){
	// 		echo $color = " ";
	// 		if (($i % 2 == 0 && $j % 2 == 0)|| ($i % 2 == 1 && $j % 2 == 1)) {
	// 			echo $color = "#";
	// 		}
	// 		else echo $color = " ";
	// 			$angka . $color;
	// 	}
	// 	$angka;
	// 	echo "<br>";
	// }

	// $x=1;
 //    while ($x <= $angka) {
 //        $y=1;

 //        while ($y <= $x) {
 //            if (($x==$y) %2 > 0)
 //            echo "#";
 //            else
 //            echo " ";
 //            $y++;
 //        }
 //        $x++;
 //    }
}

// TEST CASES
echo papan_catur(4) . "<br>";
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8) . "<br>";
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #*/

echo papan_catur(5) 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/
?>