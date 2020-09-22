

<?php

echo "Soal 1 <br> <br> ";
	$angka=5;
	for($a=1; $a<=$angka; $a++){
	for($i=1; $i<=$a; $i++){
		echo " &nbsp";
	}
	for($x=$angka; $x>=$a; $x-=1){
		echo "*";
	}
	echo"<br>";
    }
    ?>

<br><br> <center>
    <?php
    echo "Soal 2 <br><br>";
$x = 10;
while ($x > 1) {
	$y = $x;
	while ($y >= 1) {
		echo " * ";
		$y = $y - 1;
	}
	echo "<br>";
	$x = $x - 2;
	}
	echo "&nbsp";
?>
<br><br>
</center>

<?php

echo "Soal 3 <br><br> ";

    for ($x=5; $x >= 1 ; $x--) { 
        for ($y=5; $y > $x ; $y--) { 
            echo "&nbsp ";
        }

        for ($z=1; $z < ($x * 2) ; $z++) { 
            echo $z;

        }
        
    echo "<br>";
    }



?>

