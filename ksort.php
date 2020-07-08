<?php
// memasukkan nilai kedalam array
$mobil=array("zulka"=>"Volvo","Ali"=>"Bmw","Ajuab"=>"Toyota");
// key atau kunci pada array diurutkan secara ascending
ksort($mobil);
// dengan looping menampilkan tiap nilai dari array
foreach ($mobil as $x=> $nilai_x){
	echo "kunci=" . $x .", nilainya=" .$nilai_x;
	echo "<br/>";
	# code...
}
?>