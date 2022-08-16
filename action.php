<?php
	$totalAvers =0; 
	
	$totalRevers = 0;
	
	$totalrez = [];

	for($i=1; $i<=$_GET["count"]; $i++){
	
		$value_random = rand(1, 100);

		if ($value_random < 51)
		{
	 
			$totalAvers += 1; 
	   
			$sideCoins = 'avers';
	    } 
		else
		{
		
			$totalRevers += 1;
	   
			$sideCoins = 'revers';
		}
	 
		$name = "  Попытка № $i: ";	 

		$totalrez [] = ["$name"=>$sideCoins];
	}

	$triger = 1;
 
	foreach($totalrez as $name=>$valurez)
	{
	  
		foreach($valurez as $name=>$side)
	    {
		  
			echo $name;
		
			echo ($triger%5==0) ? '<p><ul><li>Выпал : '. $side. '</li></ul></p><br><br>' : '<ul><li>Выпал : '. $side. '</li></ul>' ; 
		
			$triger += 1;
			 
			 
		}
	}
	
	echo '<br>Итого выпало :';
  
	echo "<br><br>   АВЕРСОВ -$totalAvers-    РЕВЕРСОВ -$totalRevers-";

//require_once('gen_ind.html');







