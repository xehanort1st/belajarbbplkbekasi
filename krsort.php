<?php
// memasukan nilai kedalam array
$mobil=array("zulka"=>"Volvo","Ali"=>"Bmw","Ajuab"=>"Toyota");
// kunci atau key pada array diurutkan secara descending
krsort($mobil);
// dengan looping menamoilkan tiap nilai dari array
foreach ($mobil as $x => $nilai_x){
	echo "kunci=" . $x .", nilainya=" .$nilai_x;
	echo "<br/>";
	# code...
}
?>