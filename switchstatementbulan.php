<?php
$month=date('F');
// echo "$month";
switch($month){
	case 'January';
		$Bulan='Januari';
		break;
	case 'February';
		$Bulan='Februari';
		break;
	case 'March';
		$Bulan='Maret';
		break;
	case 'April';
		$Bulan='April';
		break;
	case 'May';
		$bulan='Mei';
		break;
	case 'June';
		$Bulan='Juni';
		break;
	case 'July';
		$Bulan='Juli';
		break;
	case 'August';
		$Bulan='Agustus';
		break;
	case 'September';
		$Bulan='September';
		break;
	case 'October';
		$Bulan='Oktober';
		break;
	case 'November';
		$Bulan='November';
		break;
	case 'December';
		$Bulan='Desember';
		break;
		}
		echo $month.'<br>';
		echo $Bulan;


?>