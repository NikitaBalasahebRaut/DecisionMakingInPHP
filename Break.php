<?php

 $i = 0;
 while($i < 10)
 {
    echo $i;
	$i++;
	if($i == 5) break;
 }
 echo ("Loop stopped at i = $i" );
 ?>