 <?php
function hitungKembalian($uang_belanja,$uang_konsumen){
	if($uang_konsumen==$uang_belanja){
		echo "tidak kembalian";
	}else{
		$satuan = array("kosong","se","dua ","tiga ","empat ","lima ","enam ","tujuh ","delapan ","sembilan ");
		$uang = array(50000,20000,10000,5000,2000,1000,500);
		$kembalian= $uang_konsumen-$uang_belanja;
		foreach($uang as $value){
			if($value <= $kembalian){
				$div  = $kembalian / $value;
				$sisa = $value*floor($div);
				$jml_karakter = strlen($value);
				if($jml_karakter >=4 && $jml_karakter<=5){
					$kata = "lembar";
				}else{
					$kata = "koin";
				}
				echo $satuan[floor($div)].$kata."*".$value;
				$kembalian = $kembalian - $sisa;
			}
			echo "</br>";
			if($kembalian < 100){
				break;
			}
		}
	}
}


hitungKembalian(15500, 50000);
?> 