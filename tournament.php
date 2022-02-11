<?php

class Tournament{
	
	private $nameTournament;
	private $dateTournament;
	private $participants;
	
	public function __construct(){               //Реализация конструктора
		
		$colArgs = func_num_args();
		  
		   switch ($colArgs) {
			case 1:
			  $this->nameTournament = func_get_arg(0);
			  $this->dateTournament = date('d.m.Y', time() + 86400);
			   			   
			break;
			case 2:
			  $this->nameTournament = func_get_arg(0);
			  $this->dateTournament = date_format(date_create(str_replace('.','-', func_get_arg(1))), 'd.m.Y');
			break;
		}	
		  
	}
	
	public function addPlayer( $team ){          //Реализация метода addPlayer( $team )
		 $this->participants[] = $team;
		 return $this;		
	}
	
	public function createPairs(){              //Реализация метода createPairs()
		

	    $numberOfElementsInTheArray = count($this->participants);
		
	    $extraSteam = $numberOfElementsInTheArray%2 == 0 ? 0 : 2;
		
        $day = 1;

        $rounds;
		
        for($i = 0; $i < $numberOfElementsInTheArray - 1; $i++) {
		 
            for($j = 0; $j < $numberOfElementsInTheArray / 2; $j++) {
			
               $rounds[$i][] = [$this->participants[$j], $this->participants[$numberOfElementsInTheArray-1 - $j]];
            }
    
          $this->participants[] = array_splice($this->participants, 1, 1)[0];
        } 

        foreach( $rounds as $vale ){

	           echo $this->nameTournament. ', '. $this->dateTournament.':'. '<br>';
		   	   
		    for( $i = 0; $i < count($vale)-$extraSteam; $i++ ){
	
	            print_r(implode(' - ', $vale[$i]).'<br>');
	        }
			
			$this->dateTournament = substr(date('d.m.Y', strtotime($this->dateTournament.'1 day')),0,10);
			
	        $day ++;
        }
	} 	
}
	
?>