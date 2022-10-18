<?php

$sehirler = array("İzmir","İstanbul","Manisa","Karaman");

$i = 0;  

while ($i < count($sehirler)) {

   $a = $sehirler[$i];
   
   echo $a ."\n";
   
   $i++;
}

foreach( $sehirler as $s ) {

   echo $s.'<br>';
}


$i =0;

do
{
	$a=$sehirler[$i];
	
   echo $a."\n";
   
   $i++;
   
}
while ( $i < count($sehirler ));


for($i = 0; $i < count($sehirler); $i++){

echo $sehirler[$i]."\n";
}

?>