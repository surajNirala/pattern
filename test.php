<?php 

$n = 10;

for ($i=0; $i <= $n; $i++) { 
	for ($k=0; $k <= $i; $k++) { 
		echo "*";
	}
	echo "</br>";
}

	echo "</br>";
	echo "</br>";

for ($i=0; $i < $n; $i++) { 
	for ($k=$n; $k >= $i; $k--) { 
		echo "&nbsp";
	}
	for ($j=0; $j <= $i; $j++) { 
		echo "*";
	}
	echo "</br>";
}
	echo "</br>";
	echo "</br>";
for ($i=0; $i < $n; $i++) { 
	
	for ($k=0; $k < $i; $k++) { 
		echo "&nbsp";
	}
	for ($j=$n; $j > $i; $j--) { 
		echo "*";
	}
	echo "</br>";
}	
 ?>