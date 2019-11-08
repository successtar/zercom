<?php




function Fibonacci($number){ 
      
    /* First two series */

    if ($number == 0){

    	return 0;  
    } 
           
    else if ($number == 1) {

        return 1;     
    }
      
    /* Recursive Call to get the upcoming numbers */
     
    else{
        return (Fibonacci($number-1) + Fibonacci($number-2)); 
    }
} 
  
for ($counter = 0; $counter < 100; $counter++){   

    echo Fibonacci($counter),' '; 
}



?>