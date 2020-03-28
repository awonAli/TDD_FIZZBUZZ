<?php
for( $i=1; $i<=20; $i++ )

{

echo Multiples3x($i);

echo "<br>";

}


function Multiples3x($n) 
{ 
    //$res = 0; 
    if ( $n%3 == 0 && $n%5 == 0 ){
     return 'FizzBuzz';
   	}
    if ($n % 3 == 0){
    	return 'Fizz';
    }
    if ($n % 5 == 0){
    	return 'Buzz';
    } 
        
  	return $n;
    
} 

?>

