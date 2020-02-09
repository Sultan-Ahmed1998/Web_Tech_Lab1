<?php

$ar1=array(1,2,3);
$ar2=array('A','B','C','D','E','F');
$n=0;
$k=0;
$m=0;
$s=0;
echo"Array Declare : <br>";
for($i=3;$i>0;$i--)
{	
	for($j=0;$j<$i;$j++)
	{
						
		echo "$ar1[$j]";
			
	}
			
	for($l=0;$l<=$k;$l++)
	{
			
		echo "$ar2[$m]";
		$m=$m+1;
				
	}
				
	echo "<br>";
	$k=$k+1;
		 
}

echo "<br>";
echo "Shapes : <br>";
for($i=3;$i>0;$i--)
 {
	 for($j=1;$j<=$i;$j++)
	 {
		 echo $j;
	 }
	 echo "<br>";
 }
 
 $n=0;
 for($i=0;$i<3;$i++)
 {
	 for($j=0;$j<=$i;$j++)
	 {
		 
		 echo (chr(65+$n));
		 $n=$n+1;
	 }
	 echo "<br>";
 }

?>