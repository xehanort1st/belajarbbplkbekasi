<?php
// memasukkan nilai ke dalam array
$mobil=array("volvo","Bmw","Toyota");
// array diurutkan secara acsending
sort($mobil);
// mendapatkan jumlah nilai dari array $mobil
$length=count($mobil);
// dengan looping menampilkan tiap nilai dari array
for($x=0; $x < $length; $x++){
	echo $mobil[$x];
	echo"<br/>";
}
?>
