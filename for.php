<?php
// 	
$c=$_POST["for"];
for($a=1;$a<=$c;$a++)
{
    for ($b=1;$b<=$a;$b++){
        echo '*';
    }
    	echo '<br>';
}
?>