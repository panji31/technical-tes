<?php
function count_handshake($jumlah){
	$temp=0;
	for($i=$jumlah;$i>0;$i--){
		$y = $i-1;
		$temp = $temp+$y;
	}
	return $temp; 
}
echo count_handshake(3);
?>      