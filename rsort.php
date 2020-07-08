<?php
// memasukkan nilai kedalam array
$mobil=array("volvo","Bmw","Toyota");
// array diurutkan secara descending
rsort($mobil);
// mendapatkan jumlah nilai dari array $mobil
$length=count($mobil);
// dengan looping menampilkan tiap nilai dari array
for($x=0; $x < $length;$x++){
	echo $mobil[$x];
	echo "<br/>";
}
?>