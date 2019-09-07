<?php
function drawImage($jumlah){
	for($i=1;$i<=$jumlah;$i++){
		for($j=1;$j<=$jumlah;$j++){
			if(($i==1&&$j==1) || ($i==1&&$j==$jumlah) || ($i==$jumlah&&$j==1) || ($i==$jumlah&&$j==$jumlah) ){
				echo "*";
			}else{
				$tengah = ceil($jumlah/2);
				if($i==$tengah || $j==$tengah){
					echo "*";
				}else{
					echo "=";
				}
				
			}
			
		}
		echo "<br>";
	}
}
//masukan angka ganjil
drawImage(5);
?>