<?php
	$star=5;
	for($a=1; $a<=$star; $a++){
	for($i=1; $i<=$a; $i++){
		echo " &nbsp";
	}
	for($c=$star; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
	}

echo "<br><br><br>";

	$star=5;

	for($a=1; $a<$star; $a++){

	for($b=1; $b<=$a; $b++){
		echo "&nbsp";
	}
	for($c=$star; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
	}


echo "<br><br><br>";

 $x = 6;
 $l=1;
       for ($i = 6; $i > 1; $i--) {
           for ($k = $i; $k < 6; $k++){
               echo "&nbsp";
               echo "&nbsp";
              
           }
           for ($c = 1; $c < $x; $c++){
               echo $c;

           } for ($a2=4-1; $a2 >=$l ; $a2-=1) { 
         
           	echo $a2;
           	  
           	  if ($a2<=0) {
           	  	$a2=$a2+1;
           	  }

           }

           echo "<br>";
           $x-=1;
           $l++;

   
       }


?>