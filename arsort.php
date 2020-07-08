<?php
// memasukkan nilai ke dalam array
$mobil=array("zulka"=>"volvo","Ali"=>"Bmw","Ajuab"=>"Toyota");
// nilai pada array diurutkan secara descending
arsort($mobil);
// dengan looping menampilkan tiap nilai dari array
foreach ($mobil as $x => $nilai_x){
	echo "kunci=" . $x .", nilainya=" . $nilai_x ;
	echo "<br/>";
	# code...
}
?>