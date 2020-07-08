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
	$a=$_POST["login"];
	$b=$_POST["login2"];
		if($a=="sandy"){
			if($b=="123"){
			echo "anda berhail login";
			}else{ 
			echo "password anda salah";
		}
		}else{
			echo "username salah";
		}
	

?>
<br>
<button><a href="formlogin.php">kembali</button></a>
</body>
</html>