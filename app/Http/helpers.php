<?php

 
  function persianumber($str)
  {
    $farsi_chars = ['٠','١','٢','٣','٤','٥','٦','٧','٨','٩'];
    for ($i = 0; $i < strlen($str); $i++)
    {
	   if (is_numeric($str[$i]))
	   {
		    echo($farsi_chars[$str[$i]]);
	   } 
	   else
	   {
	   		echo($str[$i]);

	   }
	}
  }

  function priceFormatter($value)
  {
  	$array=str_split($value);
	$array=array_reverse($array);
	$array2=array();
	for($i=0;$i<sizeof($array);$i++)
	{
		array_push($array2,$array[$i]);
		if(($i+1) % 3 ==0 && $i!=0 && $i!=sizeof($array)-1)
		{
			array_push($array2,',');
		}
	}
	$array2=array_reverse($array2);
	$value=implode("",$array2);
	return $value;
  }

?>
