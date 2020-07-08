<?php
// memasukkan nilai ke dalam array
$mobil=array("zulka"=>"volvo","Ali"=>"Bmw","ajuab"=>"Toyota");
// nilai pada array diurukan secara ascending
asort($mobil);
// dengan looping menampilkan tiap dari array
foreach ($mobil as $x => $nilai_x){
	echo "kunci=" . $x . ",nilainya=" . $nilai_x;
	echo "<br/>";
	# code...
}
?>