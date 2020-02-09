<?php
  

 function odd($v)
 {
	 if($v%2==0)
	 {
		 echo "<br>";
	 }
	 else
		 echo "$v";
 }
 
  for($i=10;$i<=100;$i++)
  {
	  odd($i);
  }


?>