<?php
  
 
 $array= array(0,1,2,3,4,5,6,7,8,9);

  function search($v , $array)
  {
	  for($i=0;$i<count($array);$i++)
		{
			if($v == $array[$i])
				{
					echo "$v was found at index : $i <br>";
				}
 
		}
  }
  
  search(1,$array);
  search(8,$array);
 

?>