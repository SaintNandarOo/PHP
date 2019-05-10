<?php 
	$hum=4.95;
	$milkshake=1.95;
	$cola=0.85;
	$tax=0.075;
	$pretax=0.16;
	$total=(2*$hum+$milkshake+$cola);
	$total+=($total*$tax);
	$total-=($total*$pretax);
	echo "The total cost of this restaurant meal is $total";

 ?>