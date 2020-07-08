<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
<?php

	// $a=$_POST['angka'];
	// 	if($a<5){
	// 		echo "variabel a lebih kecil dari 10";
	// }else{
	// 		echo "variable a lebih besar dari 10";	
	// }
	$a=$_POST['angka'];
	if($a>80){
	$Grade  = "Grade A";
	}elseif ($a>70){
	$Grade  = "B";
	# code...
	}elseif ($a>50){
	$Grade  = "C";
	}else{$Grade ="D";
	# code...
	}
	
	echo "Grade: $Grade";

?>
<br>
<button><a href="form_latihan2.php">kembali</button></a>
</body>
</html>